<?php 
/*
Plugin Name: Landis Graden Site Plugin
Description: Adds custom pages to the admin sidebar.
Author: Lauren Michelle Design
Author URI: www.laurenmichelledesign.com
Version: 1.0
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* Links to each file in plugins*/ 
include( plugin_dir_path( __FILE__ ) . '/lmd-callback-homepage.php');
include( plugin_dir_path( __FILE__ ) . '/lmd-callback-about.php');
include( plugin_dir_path( __FILE__ ) . '/lmd-callback-issues.php');
include( plugin_dir_path( __FILE__ ) . '/lmd-callback-events.php');
include( plugin_dir_path( __FILE__ ) . '/lmd-callback-join.php');
include( plugin_dir_path( __FILE__ ) . '/lmd-callback-donate.php');

/* Links to the style and script files */
add_action('admin_enqueue_scripts', 'my_admin_scripts');
 
function my_admin_scripts() {
    if (isset($_GET['page']) && $_GET['page'] == 'site-pages' || 'lmd-submenu-page-2' || 'lmd-submenu-page-5') {
        wp_enqueue_media();
        wp_register_script('my-admin-js', WP_PLUGIN_URL .'/lmd-site/js/media_uploads.js', array('jquery','jquery-ui-datepicker'), '20150204', true );
        wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
        wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,700');
        wp_register_script('my-calendar-js', WP_PLUGIN_URL .'/lmd-site/js/calendar.js', array('jquery'));
        wp_register_script('jquery-ui', WP_PLUGIN_URL .'/lmd-site/js/jquery-ui.js', array('jquery'));
        wp_enqueue_script('jquery-ui');
        wp_register_script('bootstrap-js', WP_PLUGIN_URL .'/lmd-site/js/bootstrap.min.js');
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('my-admin-js');
        wp_enqueue_script('my-calendar-js');
        wp_enqueue_style('bootstrap-style', plugins_url('css/bootstrap.css', __FILE__ ));
        wp_enqueue_style('admin-style', plugins_url('css/style.css', __FILE__ ));
    }
}


// Registers 'Site Pages' as a custom menu page

function register_my_custom_menu_page(){
	add_menu_page( 'Landis Graden Site Pages', 'Site Pages', 'administrator', 'site-pages', 'lmd_callback_homepage', 'dashicons-admin-home', 6 ); 
	add_submenu_page( 'site-pages', 'Home', 'Home', 'administrator', 'site-pages', 'lmd_callback_homepage');
    add_submenu_page( 'site-pages', 'About Landis', 'About Landis', 'administrator', 'site-pages-2', 'lmd_callback_about');
    add_submenu_page( 'site-pages', 'The Issues', 'The Issues', 'administrator', 'site-pages-3', 'lmd_callback_issues');
    add_submenu_page( 'site-pages', 'Events Page', 'Events Page', 'administrator', 'site-pages-4', 'lmd_callback_events');
    add_submenu_page( 'site-pages', 'Join Campaign', 'Join Campaign', 'administrator', 'site-pages-5', 'lmd_callback_join');
    add_submenu_page( 'site-pages', 'Donate', 'Donate', 'administrator', 'site-pages-6', 'lmd_callback_donate');
}

// Add action
add_action( 'admin_menu', 'register_my_custom_menu_page' );




?>