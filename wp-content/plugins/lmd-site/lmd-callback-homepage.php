<?php 

function lmd_callback_homepage(){
    if (isset ($_POST['banner-submit'])) {
        $data = array(
            'block1_img' => sanitize_text_field( $_POST['block1_img'] ),
            'block1_title' => sanitize_text_field( $_POST['block1_title'] ),
            'block1_body' => sanitize_text_field( $_POST['block1_body'] )
        );
        update_option('page_home_banner', $data);
    }
    
	if (isset ($_POST['main-submit'])) {
		$data = array(
			'block2_title' => sanitize_text_field( $_POST['block2_title'] ),
            'block2_body'  => wpautop( $_POST['block2_body'] ),
			'block2_body_1'  => sanitize_text_field( $_POST['block2_body_1'] ),
			'block2_body_2'  => sanitize_text_field( $_POST['block2_body_2'] ),
			'block2_body_3'  => sanitize_text_field( $_POST['block2_body_3'] ),
			'block2_body_4'  => sanitize_text_field( $_POST['block2_body_4'] ),
			'block2_img'  => sanitize_text_field( $_POST['block2_img'] ),
			'block3_img' => sanitize_text_field( $_POST['block3_img'] ),
			'block3_title' => sanitize_text_field( $_POST['block3_title'] ),
			'block3_body'  => sanitize_text_field( $_POST['block3_body'] ),
			'block4_img'  => sanitize_text_field( $_POST['block4_img'] ),
			'block4_title'  => sanitize_text_field( $_POST['block4_title'] ),
			'block4_body'  => sanitize_text_field( $_POST['block4_body'] ),
			'block4_issue1'  => sanitize_text_field( $_POST['block4_issue1'] ),
			'block4_issue2'  => sanitize_text_field( $_POST['block4_issue2'] ),
			'block4_issue3'  => sanitize_text_field( $_POST['block4_issue3'] ),
			'block4_issue4'  => sanitize_text_field( $_POST['block4_issue4'] ),
			'block4_issue5'  => sanitize_text_field( $_POST['block4_issue5'] ),
			'block4_issue6'  => sanitize_text_field( $_POST['block4_issue6'] ),
			);
		update_option('page_home', $data);
	}

	$db_values = get_option('page_home');
	foreach ($db_values as $key=>$value) {
		$db_values[$key] = stripslashes($value);
	}
    
    $db_values_banner = get_option('page_home_banner');
    foreach ($db_values as $key=>$value) {
        $db_values[$key] = stripslashes($value);
    }

	//setting empty values to avoid 'undefined index' warning
	$block1_img = '';
	$block1_title = '';
	$block1_body = '';
	$block2_title = '';
	$block2_body = '';
	$block2_body_1 = '';
	$block2_body_2 = '';
	$block2_body_3 = '';
	$block2_body_4 = '';
	$block2_img = '';
	$block3_img = '';
	$block3_title = '';
	$block3_body = '';
	$block4_img = '';
	$block4_title = '';
	$block4_body = '';
	$block4_issue1 = '';
	$block4_issue2 = '';
	$block4_issue3 = '';
	$block4_issue4 = '';
	$block4_issue5 = '';
	$block4_issue6 = '';
//if there's any data in options table, updating our variables with relevant data6	if( $db_values ) {
    $block1_img = $db_values_banner['block1_img'] ? $db_values_banner['block1_img'] : '';
    $block1_title = $db_values_banner['block1_title'] ? $db_values_banner['block1_title'] : '';
    $block1_body = $db_values_banner['block1_body'] ? $db_values_banner['block1_body'] : '';
    $block2_title = $db_values['block2_title'] ? $db_values['block2_title'] : '';
    $block2_body = $db_values['block2_body'] ? $db_values['block2_body'] : '';
    $block2_body_1 = $db_values['block2_body_1'] ? $db_values['block2_body_1'] : '';
    $block2_body_2 = $db_values['block2_body_2'] ? $db_values['block2_body_2'] : '';
    $block2_body_3 = $db_values['block2_body_3'] ? $db_values['block2_body_3'] : '';
    $block2_body_4 = $db_values['block2_body_4'] ? $db_values['block2_body_4'] : '';
    $block2_img = $db_values['block2_img'] ? $db_values['block2_img'] : '';
    $block3_img = $db_values['block3_img'] ? $db_values['block3_img'] : '';
    $block3_title = $db_values['block3_title'] ? $db_values['block3_title'] : '';
    $block3_body = $db_values['block3_body'] ? $db_values['block3_body'] : '';
    $block4_img = $db_values['block4_img'] ? $db_values['block4_img'] : '';
    $block4_title = $db_values['block4_title'] ? $db_values['block4_title'] : '';
    $block4_body = $db_values['block4_body'] ? $db_values['block4_body'] : '';
    $block4_issue1 = $db_values['block4_issue1'] ? $db_values['block4_issue1'] : '';
    $block4_issue2 = $db_values['block4_issue2'] ? $db_values['block4_issue2'] : '';
    $block4_issue3 = $db_values['block4_issue3'] ? $db_values['block4_issue3'] : '';
    $block4_issue4 = $db_values['block4_issue4'] ? $db_values['block4_issue4'] : '';
    $block4_issue5 = $db_values['block4_issue5'] ? $db_values['block4_issue5'] : '';
    $block4_issue6 = $db_values['block4_issue6'] ? $db_values['block4_issue6'] : '';

?>
<form name="main-form" action="" method="post">
<div class="container-fluid">
		<div class="row">
            <div class="col-sm-10 col-sm-offset-1" style="background:#23282D;">
                <div class="col-xs-4">
                    <input type="submit" class="btn-secondary btn" name="main-submit" value="Publish Page" style="margin-top: 25px; margin-bottom: 25px;">
                </div>
				<div class="col-xs-8">
                    <h1 class="white-text pull-right" style="margin-bottom: 20px;">Home Page</h1>
				</div>
            </div>
            <div class="col-sm-10 col-sm-offset-1" style="background:rgba(35, 40, 45, 0.90);color: #fff;">
				<div class="row">
					<div class="col-sm-12 no-pad" background-color:#fff;>
						<form name="banner-form" action="" method="post" onsubmit="window.location.reload()">
							<div class="col-xs-12">
							    <div class="col-xs-12">
                                    <h2>Banner Image</h2>
                                    <input type="text" id="block1_img" name="block1_img" value="<?php echo esc_attr($db_values_banner['block1_img']); ?>" size="30" class="hide">
                                    <input id="upload_image_button" class="btn-primary btn" type="button" value="Choose Image" />
                                    <br>
                                    <br>
							    </div>
								
								<div id="banner-img" class="col-xs-12 no-pad" style="position: relative;">
                                    <?php
                                    if(! empty($block1_img)){ ?>
                                    <p class="col-xs-12">Current Banner Image:</p>
                                    <img class="col-xs-12 no-pad" src="<?php echo esc_attr($db_values_banner['block1_img']); ?>">
                                    <?php }
                                    else { ?>
                                        <div style="background:#777">
                                            <span>No Image to Display</span>
                                        </div> 
                                    <?php }
                                    ?>
                                </div>
                                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3" style="position:absolute;">
                                    <input class="title-input text-center" type="text" name="block1_title" value="<?php echo esc_attr($db_values_banner['block1_title']); ?>" width="100%" style="background: transparent; border: 2px solid #fff; margin-top: 150px; color: #fff;" placeholder="Heading">
                                    <input class="title-input text-center" type="text" name="block1_body" value="<?php echo esc_attr($db_values_banner['block1_body']); ?>" width="100%" style="background: transparent; border: 2px solid #fff; margin-top: 15px; color: #fff; font-weight: 300;" placeholder="Subtitle">
								</div>
                                <input type="submit" class="btn-primary btn" name="banner-submit" value="Save Banner" style="margin-top: 25px;">
                            </div>
                            </form>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-xs-12">
                                    <br><br>
                                    <h2>Meet Landis</h2>
                                    <span class="tip"><object data="<?php echo plugins_url( '/assets/question.svg', __FILE__ ) ?>" type="image/svg+xml"></object>&nbsp;&nbsp;This is the area under the banner on the Home page.</span>
                                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
                                        <br><br>
                                        <input class="title-input text-center" type="text" name="block2_title" value="<?php echo esc_attr($db_values['block2_title']); ?>" width="100%">
                                    </div>
                                    <div class="col-xs-12">
                                        <br><br>
                                        <?php 
                                        $text = stripslashes_deep(wpautop($db_values['block2_body']));
                                        $content = $text;
                                        $editor_id = 'about_editor';
                                        $settings = array(
                                            'textarea_name' => 'block2_body',
                                            'wpautop' => true,
                                            'textarea_rows' => 10
                                        );

                                        wp_editor(wpautop($content), $editor_id, $settings ); 
                                        ?>
                                    </div>
                                    <br>
                            </div>
                        </div>
                        <div class="row">
                                <!-- Take Action -->
                                <div class="col-xs-12">
                                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
                                        <br><br>
                                        <input class="title-input text-center" type="text" name="block4_title" value="<?php echo esc_attr($db_values['block4_title']); ?>" placeholder="Heading">
                                    </div>
                                    <div class="col-xs-12">
                                        <br><br>
                                        <?php 
                                            $text = stripslashes_deep(wpautop($db_values['block4_body']));
                                            $content = $text;
                                            $editor_id = 'block4_editor';
                                            $settings = array(
                                                'textarea_name' => 'block4_body',
                                                'wpautop' => true,
                                                'textarea_rows' => 10
                                            );

                                            wp_editor(wpautop($content), $editor_id, $settings ); 
                                        ?>
                                    </div>
                                </div>
                            </div>	
                        
                        <div class="col-xs-12">
                            <input type="submit" class="btn-secondary btn pull-right" name="main-submit" value="Publish Page" style="margin-top: 25px; margin-bottom: 25px;">
                        </div>
				</div>
			</div>
		</div>
    </form>
	<?php
}
?>