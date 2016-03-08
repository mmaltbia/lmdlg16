<?php
/**
 * Plugin Name: Give - PayPal Payments Pro
 * Plugin URL: https://givewp.com/addons/paypal-pro-gateway/
 * Description: Adds a payment gateway for PayPal Website Payments Pro
 * Version: 1.0.1
 * Author: WordImpress
 * Author URI: http://wordimpress.com
 * Contributors: dlocc, webdevmattcrom, wordimpress
 */

if ( ! defined( 'GIVEPP_PLUGIN_DIR' ) ) {
	define( 'GIVEPP_PLUGIN_DIR', dirname( __FILE__ ) );
}

define( 'GIVEPP_STORE_API_URL', 'https://givewp.com' );
define( 'GIVEPP_PRODUCT_NAME', 'PayPal Pro and PayPal Express' );
define( 'GIVEPP_VERSION', '1.0.1' );


//Licensing
function give_add_paypal_pro_licensing() {
	if ( class_exists( 'Give_License' ) && is_admin() ) {
		$give_paypal_pro_license = new Give_License( __FILE__, 'PayPal Pro Gateway', GIVEPP_VERSION, 'Devin Walker', 'paypal_pro_license_key' );
	}
}

add_action( 'plugins_loaded', 'give_add_paypal_pro_licensing' );


// Load the text domain
function givepp_load_textdomain() {

	// Set filter for plugin's languages directory
	$lang_dir = dirname( plugin_basename( __FILE__ ) ) . '/languages/';

	// Traditional WordPress plugin locale filter
	$locale = apply_filters( 'plugin_locale', get_locale(), 'givepp' );
	$mofile = sprintf( '%1$s-%2$s.mo', 'givepp', $locale );

	// Setup paths to current locale file
	$mofile_local  = $lang_dir . $mofile;
	$mofile_global = WP_LANG_DIR . '/givepp/' . $mofile;

	if ( file_exists( $mofile_global ) ) {
		// Look in global /wp-content/languages/give-paypal-pro folder
		load_textdomain( 'givepp', $mofile_global );
	} elseif ( file_exists( $mofile_local ) ) {
		// Look in local /wp-content/plugins/give-paypal-pro/languages/ folder
		load_textdomain( 'givepp', $mofile_local );
	} else {
		// Load the default language files
		load_plugin_textdomain( 'givepp', false, $lang_dir );
	}

}

add_action( 'init', 'givepp_load_textdomain' );


/**
 * Registers the Gateway
 *
 * @param $gateways
 *
 * @return mixed
 */
function givepp_register_paypal_pro_gateway( $gateways ) {
	// Format: ID => Name
	$gateways['paypalpro'] = array(
		'admin_label'    => __( 'PayPal Pro', 'givepp' ),
		'checkout_label' => __( 'Credit Card', 'givepp' )
	);

	return $gateways;
}

add_filter( 'give_payment_gateways', 'givepp_register_paypal_pro_gateway' );


/**
 * PayPal Pro: Processes the payment
 *
 * @param array $purchase_data
 */
function givepp_pro_process_payment( $purchase_data ) {

	$validate            = givepp_validate_post_fields( $purchase_data['post_data'] );
	$parsed_return_query = givepp_parsed_return_query( $purchase_data['card_info'] );
	if ( $validate != true ) {
		give_send_back_to_checkout( '?payment-mode=' . $purchase_data['post_data']['give-gateway'] . '&form_id=' . $purchase_data['post_data']['give-form-id'] . '&' . http_build_query( $parsed_return_query ) );
	}

	global $give_options;

	require_once GIVEPP_PLUGIN_DIR . '/paypal/PayPalFunctions.php';
	require_once GIVEPP_PLUGIN_DIR . '/paypal/PayPalPro.php';

	$credentials = givepp_api_credentials();

	foreach ( $credentials as $cred ) {
		if ( is_null( $cred ) ) {
			give_set_error( 0, __( 'You must enter your API keys in settings', 'givepp' ) );
			give_send_back_to_checkout( '?payment-mode=' . $purchase_data['post_data']['give-gateway'] . '&form_id=' . $purchase_data['post_data']['give-form-id'] . '&' . http_build_query( $parsed_return_query ) );
		}
	}


	$paypalpro = new PayPalProGateway();

	$data = array(
		'credentials'   => array(
			'api_username'  => $credentials['api_username'],
			'api_password'  => $credentials['api_password'],
			'api_signature' => $credentials['api_signature']
		),
		'api_end_point' => $credentials['api_end_point'],
		'card_data'     => array(
			'number'          => $purchase_data['card_info']['card_number'],
			'exp_month'       => $purchase_data['card_info']['card_exp_month'],
			'exp_year'        => $purchase_data['card_info']['card_exp_year'],
			'cvc'             => $purchase_data['card_info']['card_cvc'],
			'card_type'       => givepp_get_card_type( $purchase_data['card_info']['card_number'] ),
			'first_name'      => $purchase_data['user_info']['first_name'],
			'last_name'       => $purchase_data['user_info']['last_name'],
			'billing_address' => $purchase_data['card_info']['card_address'] . ' ' . $purchase_data['card_info']['card_address_2'],
			'billing_city'    => $purchase_data['card_info']['card_city'],
			'billing_state'   => $purchase_data['card_info']['card_state'],
			'billing_zip'     => $purchase_data['card_info']['card_zip'],
			'billing_country' => $purchase_data['card_info']['card_country'],
			'email'           => $purchase_data['post_data']['give_email'],
		),
		'price'         => round( $purchase_data['price'], 2 ),
		'form_title'    => $purchase_data['post_data']['give-form-title'],
		'form_id'       => intval( $purchase_data['post_data']['give-form-id'] ),
		'currency_code' => $give_options['currency'],
	);

	//	echo '<pre>'; print_r( $data ); echo '</pre>'; exit;

	$paypalpro->purchase_data( $data );

	$transaction = $paypalpro->process_sale();

	$responsecode = strtoupper( $transaction['ACK'] );

	if ( $responsecode == 'SUCCESS' || $responsecode == 'SUCCESSWITHWARNING' || isset( $transaction['TRANSACTIONID'] ) ) {

		// setup the payment details
		$payment_data = array(
			'price'           => $purchase_data['price'],
			'give_form_title' => $purchase_data['post_data']['give-form-title'],
			'give_form_id'    => intval( $purchase_data['post_data']['give-form-id'] ),
			'date'            => $purchase_data['date'],
			'user_email'      => $purchase_data['post_data']['give_email'],
			'purchase_key'    => $purchase_data['purchase_key'],
			'currency'        => $give_options['currency'],
			'user_info'       => $purchase_data['user_info'],
			'status'          => 'pending'
		);

		// record this payment
		$payment = give_insert_payment( $payment_data );
		give_insert_payment_note( $payment, 'PayPal Pro Transaction ID: ' . $transaction['TRANSACTIONID'] );

		if ( function_exists( 'give_set_payment_transaction_id' ) ) {
			give_set_payment_transaction_id( $payment, $transaction['TRANSACTIONID'] );
		}

		// complete the purchase
		give_update_payment_status( $payment, 'publish' );
		give_send_to_success_page(); // this function redirects and exits itself

	} else {
		foreach ( $transaction as $key => $value ) {
			if ( substr( $key, 0, 11 ) == 'L_ERRORCODE' ) {
				$errorCode = substr( $key, 11 );
				$value     = $transaction[ 'L_ERRORCODE' . $errorCode ];
				give_set_error( $value, $transaction[ 'L_SHORTMESSAGE' . $errorCode ] . ' ' . $transaction[ 'L_LONGMESSAGE' . $errorCode ] );
				give_record_gateway_error( __( 'PayPal Pro Error', 'givepp' ), sprintf( __( 'PayPal Pro returned an error while processing a payment. Details: %s', 'givepp' ), json_encode( $transaction ) ) );
			}
		}
		give_send_back_to_checkout( '?payment-mode=' . $purchase_data['post_data']['give-gateway'] . '&form_id=' . $purchase_data['post_data']['give-form-id'] . '&' . http_build_query( $parsed_return_query ) );
	}

}

add_action( 'give_gateway_paypalpro', 'givepp_pro_process_payment' );


/**
 * Register the gateway settings
 *
 * @description  adds the settings to the Payment Gateways section (CMB2)
 * @access       public
 * @since        1.0
 * @return      array
 */
function givepp_add_settings( $settings ) {

	$givepp_settings = array(
		array(
			'name' => '<strong>' . __( 'PayPal Pro', 'givepp' ) . '</strong>',
			'desc' => '<hr>',
			'id'   => 'give_title_paypal_pro',
			'type' => 'give_title',
		),
		array(
			'id'   => 'live_paypal_api_username',
			'name' => __( 'Live API Username', 'givepp' ),
			'desc' => __( 'Enter your live API username', 'givepp' ),
			'type' => 'text',
			'size' => 'regular'
		),
		array(
			'id'   => 'live_paypal_api_password',
			'name' => __( 'Live API Password', 'givepp' ),
			'desc' => __( 'Enter your live API password', 'givepp' ),
			'type' => 'text',
		),
		array(
			'id'   => 'live_paypal_api_signature',
			'name' => __( 'Live API Signature', 'givepp' ),
			'desc' => __( 'Enter your live API signature', 'givepp' ),
			'type' => 'text',
		),
		array(
			'id'   => 'test_paypal_api_username',
			'name' => __( 'Test API Username', 'givepp' ),
			'desc' => __( 'Enter your test API username', 'givepp' ),
			'type' => 'text',
		),
		array(
			'id'   => 'test_paypal_api_password',
			'name' => __( 'Test API Password', 'givepp' ),
			'desc' => __( 'Enter your test API password', 'givepp' ),
			'type' => 'text',
		),
		array(
			'id'   => 'test_paypal_api_signature',
			'name' => __( 'Test API Signature', 'givepp' ),
			'desc' => __( 'Enter your test API signature', 'givepp' ),
			'type' => 'text',
		)
	);

	return array_merge( $settings, $givepp_settings );
}

add_filter( 'give_settings_gateways', 'givepp_add_settings' );


/**
 * Give PayPal Pro API Credentials
 *
 * @return array
 */
function givepp_api_credentials() {
	global $give_options;

	if ( give_is_test_mode() ) {
		$api_username         = isset( $give_options['test_paypal_api_username'] ) ? $give_options['test_paypal_api_username'] : null;
		$api_password         = isset( $give_options['test_paypal_api_password'] ) ? $give_options['test_paypal_api_password'] : null;
		$api_signature        = isset( $give_options['test_paypal_api_signature'] ) ? $give_options['test_paypal_api_signature'] : null;
		$api_end_point        = 'https://api-3t.sandbox.paypal.com/nvp';
		$express_checkout_url = 'https://www.sandbox.paypal.com/webscr&cmd=_express-checkout&token=';
	} else {
		$api_username         = isset( $give_options['live_paypal_api_username'] ) ? $give_options['live_paypal_api_username'] : null;
		$api_password         = isset( $give_options['live_paypal_api_password'] ) ? $give_options['live_paypal_api_password'] : null;
		$api_signature        = isset( $give_options['live_paypal_api_signature'] ) ? $give_options['live_paypal_api_signature'] : null;
		$api_end_point        = 'https://api-3t.paypal.com/nvp';
		$express_checkout_url = 'https://www.paypal.com/webscr&cmd=_express-checkout&token=';
	}
	$data = array(
		'api_username'         => $api_username,
		'api_password'         => $api_password,
		'api_signature'        => $api_signature,
		'api_end_point'        => $api_end_point,
		'express_checkout_url' => $express_checkout_url,
	);

	return $data;
}

/**
 * Parsed Return Query
 *
 * @param $post_data
 *
 * @return array
 */
function givepp_parsed_return_query( $post_data ) {
	$post_data = array(
		'billing_address'   => $post_data['card_address'],
		'billing_address_2' => $post_data['card_address_2'],
		'billing_city'      => $post_data['card_city'],
		'billing_country'   => $post_data['card_country'],
		'billing_zip'       => $post_data['card_zip'],
		'card_cvc'          => $post_data['card_cvc'],
		'card_exp_month'    => $post_data['card_exp_month'],
		'card_exp_year'     => $post_data['card_exp_year'],
	);
	$post_data = array_filter( $post_data );

	return $post_data;
}

/**
 * Validate Post Fields
 *
 * @param $purchase_data
 *
 * @return bool
 */
function givepp_validate_post_fields( $purchase_data ) {
	$validate = true;
	$number   = 0;
	foreach ( $purchase_data as $k => $v ) {
		if ( $v == '' ) {
			switch ( $k ) {
				case 'card_address':
					$k = __( 'Billing Address', 'givepp' );
					break;
				case 'card_city':
					$k = __( 'Billing City', 'givepp' );
					break;
				case 'card_zip':
					$k = __( 'Billing Zip', 'givepp' );
					break;
				case 'card_number':
					$k = __( 'Credit Card Number', 'givepp' );
					break;
				case 'card_cvc':
					$k = __( 'CVC Code', 'givepp' );
					break;
				case 'card_exp_month':
					$k = __( 'Credit Card Expiration Month', 'givepp' );
					break;
				case 'card_exp_year':
					$k = __( 'Credit Card Expiration Year', 'givepp' );
					break;
				default:
					$k = false;
					break;
			}
			if ( $k != false ) {
				give_set_error( $number, __( "Invalid $k", 'givepp' ) );
				$validate = false;
				$number ++;
			}
		}
	}

	return $validate;
}

/**
 * Get Card Type
 *
 * @param $card_number
 *
 * @return string
 */
function givepp_get_card_type( $card_number ) {

	/*
	  * mastercard: Must have a prefix of 51 to 55, and must be 16 digits in length.
	  * Visa: Must have a prefix of 4, and must be either 13 or 16 digits in length.
	  * American Express: Must have a prefix of 34 or 37, and must be 15 digits in length.
	  * Discover: Must have a prefix of 6011, and must be 16 digits in length.
	  */
	if ( preg_match( "/^5[1-5][0-9]{14}$/", $card_number ) ) {
		return "mastercard";
	}

	if ( preg_match( "/^4[0-9]{12}([0-9]{3})?$/", $card_number ) ) {
		return "visa";
	}

	if ( preg_match( "/^3[47][0-9]{13}$/", $card_number ) ) {
		return "amex";
	}

	if ( preg_match( "/^6011[0-9]{12}$/", $card_number ) ) {
		return "discover";
	}
}

/**
 * Given a Payment ID, extract the transaction ID
 *
 * @param  string $payment_id Payment ID
 *
 * @return string                   Transaction ID
 */
function givepp_pro_get_payment_transaction_id( $payment_id ) {

	$notes          = give_get_payment_notes( $payment_id );
	$transaction_id = null;
	foreach ( $notes as $note ) {
		if ( preg_match( '/^PayPal Pro Transaction ID: ([^\s]+)/', $note->comment_content, $match ) ) {
			$transaction_id = $match[1];
			continue;
		}
	}

	return apply_filters( 'givepp_set_payment_transaction_id', $transaction_id, $payment_id );
}

add_filter( 'give_get_payment_transaction_id-paypalpro', 'givepp_pro_get_payment_transaction_id', 10, 1 );

