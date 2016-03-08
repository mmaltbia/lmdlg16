<?php 

function lmd_callback_issues(){
    if (isset ($_POST['banner-submit'])) {
        $data = array(
            'block1_img' => sanitize_text_field( $_POST['block1_img'] ),
            'block1_title' => sanitize_text_field( $_POST['block1_title'] ),
            'block1_body' => sanitize_text_field( $_POST['block1_body'] )
        );
        update_option('page_issues_banner', $data);
    }

    if (isset ($_POST['main-submit'])) {
        $data = array(
            'block2_title' => sanitize_text_field( $_POST['block2_title'] ),
            'block2_body'  => wpautop( $_POST['block2_body'] ),
            'block2_issue_body'  => wpautop( $_POST['block2_issue_body'] ),
            'block3_img' => sanitize_text_field( $_POST['block3_img'] ),
            'block3_title' => sanitize_text_field( $_POST['block3_title'] ),
            'block3_body'  => wpautop( $_POST['block3_body'] ),
            'block2_issue1_title'  => sanitize_text_field( $_POST['block2_issue1_title'] ),
            'block2_issue2_title'  => sanitize_text_field( $_POST['block2_issue2_title'] ),
            'block2_issue3_title'  => sanitize_text_field( $_POST['block2_issue3_title'] ),
            'block2_issue4_title'  => sanitize_text_field( $_POST['block2_issue4_title'] ),
            'block2_issue5_title'  => sanitize_text_field( $_POST['block2_issue5_title'] ),
            'block2_issue6_title'  => sanitize_text_field( $_POST['block2_issue6_title'] ),
            'block2_issue7_title'  => sanitize_text_field( $_POST['block2_issue7_title'] ),
            'block2_issue8_title'  => sanitize_text_field( $_POST['block2_issue8_title'] ),
            'block2_issue9_title'  => sanitize_text_field( $_POST['block2_issue9_title'] ),
            'block2_issue1'  => sanitize_text_field( $_POST['block2_issue1'] ),
            'block2_issue2'  => sanitize_text_field( $_POST['block2_issue2'] ),
            'block2_issue3'  => sanitize_text_field( $_POST['block2_issue3'] ),
            'block2_issue4'  => sanitize_text_field( $_POST['block2_issue4'] ),
            'block2_issue5'  => sanitize_text_field( $_POST['block2_issue5'] ),
            'block2_issue6'  => sanitize_text_field( $_POST['block2_issue6'] ),
            'block2_issue7'  => sanitize_text_field( $_POST['block2_issue7'] ),
            'block2_issue8'  => sanitize_text_field( $_POST['block2_issue8'] ),
            'block2_issue9'  => sanitize_text_field( $_POST['block2_issue9'] ),
            'block2_issue1_icon'  => sanitize_text_field( $_POST['block2_issue1_icon'] ),
            'block2_issue2_icon'  => sanitize_text_field( $_POST['block2_issue2_icon'] ),
            'block2_issue3_icon'  => sanitize_text_field( $_POST['block2_issue3_icon'] ),
            'block2_issue4_icon'  => sanitize_text_field( $_POST['block2_issue4_icon'] ),
            'block2_issue5_icon'  => sanitize_text_field( $_POST['block2_issue5_icon'] ),
            'block2_issue6_icon'  => sanitize_text_field( $_POST['block2_issue6_icon'] ),
            'block2_issue7_icon'  => sanitize_text_field( $_POST['block2_issue7_icon'] ),
            'block2_issue8_icon'  => sanitize_text_field( $_POST['block2_issue8_icon'] ),
            'block2_issue9_icon'  => sanitize_text_field( $_POST['block2_issue9_icon'] )
        );
        update_option('page_issues', $data);
    }

    $db_values = get_option('page_issues');
    foreach ($db_values as $key=>$value) {
        $db_values[$key] = stripslashes($value);
    }

    $db_values_banner = get_option('page_issues_banner');
    foreach ($db_values as $key=>$value) {
        $db_values[$key] = stripslashes_deep($value);
    }

    //setting empty values to avoid 'undefined index' warning
    $block1_img = '';
    $block1_title = '';
    $block1_body = '';
    $block2_title = '';
    $block2_body = '';
    $block2_issue_body = '';
    $block2_img = '';
    $block3_img = '';
    $block3_title = '';
    $block3_body = '';
    $block2_issue1_title = '';
    $block2_issue2_title = '';
    $block2_issue3_title = '';
    $block2_issue4_title = '';
    $block2_issue5_title = '';
    $block2_issue6_title = '';
    $block2_issue7_title = '';
    $block2_issue8_title = '';
    $block2_issue9_title = '';
    $block2_issue1 = '';
    $block2_issue2 = '';
    $block2_issue3 = '';
    $block2_issue4 = '';
    $block2_issue5 = '';
    $block2_issue6 = '';
    $block2_issue7 = '';
    $block2_issue8 = '';
    $block2_issue9 = '';
    $block2_issue1_icon = '';
    $block2_issue2_icon = '';
    $block2_issue3_icon = '';
    $block2_issue4_icon = '';
    $block2_issue5_icon = '';
    $block2_issue6_icon = '';
    $block2_issue7_icon = '';
    $block2_issue8_icon = '';
    $block2_issue9_icon = '';
    //if there's any data in options table, updating our variables with relevant data6	if( $db_values ) {
    $block1_img = $db_values_banner['block1_img'] ? $db_values_banner['block1_img'] : '';
    $block1_title = $db_values_banner['block1_title'] ? $db_values_banner['block1_title'] : '';
    $block1_body = $db_values_banner['block1_body'] ? $db_values_banner['block1_body'] : '';
    $block2_title = $db_values['block2_title'] ? $db_values['block2_title'] : '';
    $block2_body = $db_values['block2_body'] ? $db_values['block2_body'] : '';
    $block2_issue_body = $db_values['block2_issue_body'] ? $db_values['block2_issue_body'] : '';
    $block3_img = $db_values['block3_img'] ? $db_values['block3_img'] : '';
    $block3_title = $db_values['block3_title'] ? $db_values['block3_title'] : '';
    $block3_body = $db_values['block3_body'] ? $db_values['block3_body'] : '';
    $block3_panel1_title = $db_values['block3_panel1_title'] ? $db_values['block3_panel1_title'] : '';
    $block3_panel2_title = $db_values['block3_panel2_title'] ? $db_values['block3_panel2_title'] : '';
    $block3_panel3_title = $db_values['block3_panel3_title'] ? $db_values['block3_panel3_title'] : '';
    $block3_panel4_title = $db_values['block3_panel4_title'] ? $db_values['block3_panel4_title'] : '';
    $block3_panel1 = $db_values['block3_panel1'] ? $db_values['block3_panel1'] : '';
    $block3_panel2 = $db_values['block3_panel2'] ? $db_values['block3_panel2'] : '';
    $block3_panel3 = $db_values['block3_panel3'] ? $db_values['block3_panel3'] : '';
    $block3_panel4 = $db_values['block3_panel4'] ? $db_values['block3_panel4'] : '';
    $block3_title = $db_values['block3_title'] ? $db_values['block3_title'] : '';
    $block2_issue1_title = $db_values['block2_issue1_title'] ? $db_values['block2_issue1_title'] : '';
    $block2_issue1_title = $db_values['block2_issue1_title'] ? $db_values['block2_issue1_title'] : '';
    $block2_issue2_title = $db_values['block2_issue2_title'] ? $db_values['block2_issue2_title'] : '';
    $block2_issue3_title = $db_values['block2_issue3_title'] ? $db_values['block2_issue3_title'] : '';
    $block2_issue4_title = $db_values['block2_issue4_title'] ? $db_values['block2_issue4_title'] : '';
    $block2_issue5_title = $db_values['block2_issue5_title'] ? $db_values['block2_issue5_title'] : '';
    $block2_issue6_title = $db_values['block2_issue6_title'] ? $db_values['block2_issue6_title'] : '';
    $block2_issue7_title = $db_values['block2_issue7_title'] ? $db_values['block2_issue7_title'] : '';
    $block2_issue8_title = $db_values['block2_issue8_title'] ? $db_values['block2_issue8_title'] : '';
    $block2_issue9_title = $db_values['block2_issue9_title'] ? $db_values['block2_issue9_title'] : '';
    $block2_issue1 = $db_values['block2_issue1'] ? $db_values['block2_issue1'] : '';
    $block2_issue2 = $db_values['block2_issue2'] ? $db_values['block2_issue2'] : '';
    $block2_issue3 = $db_values['block2_issue3'] ? $db_values['block2_issue3'] : '';
    $block2_issue4 = $db_values['block2_issue4'] ? $db_values['block2_issue4'] : '';
    $block2_issue5 = $db_values['block2_issue5'] ? $db_values['block2_issue5'] : '';
    $block2_issue6 = $db_values['block2_issue6'] ? $db_values['block2_issue6'] : '';
    $block2_issue7 = $db_values['block2_issue7'] ? $db_values['block2_issue7'] : '';
    $block2_issue8 = $db_values['block2_issue8'] ? $db_values['block2_issue8'] : '';
    $block2_issue9 = $db_values['block2_issue9'] ? $db_values['block2_issue9'] : '';
    $block2_issue1_icon = $db_values['block2_issue1_icon'] ? $db_values['block2_issue1_icon'] : '';
    $block2_issue2_icon = $db_values['block2_issue2_icon'] ? $db_values['block2_issue2_icon'] : '';
    $block2_issue3_icon = $db_values['block2_issue3_icon'] ? $db_values['block2_issue3_icon'] : '';
    $block2_issue4_icon = $db_values['block2_issue4_icon'] ? $db_values['block2_issue4_icon'] : '';
    $block2_issue5_icon = $db_values['block2_issue5_icon'] ? $db_values['block2_issue5_icon'] : '';
    $block2_issue6_icon = $db_values['block2_issue6_icon'] ? $db_values['block2_issue6_icon'] : '';
    $block2_issue7_icon = $db_values['block2_issue7_icon'] ? $db_values['block2_issue7_icon'] : '';
    $block2_issue8_icon = $db_values['block2_issue8_icon'] ? $db_values['block2_issue8_icon'] : '';
    $block2_issue9_icon = $db_values['block2_issue9_icon'] ? $db_values['block2_issue9_icon'] : '';

?>
<form name="main-form" action="" method="post">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1" style="background:#23282D;">
            <div class="col-xs-8">
                <h1 class="white-text" style="margin-bottom: 20px;">The Issues Page</h1>
            </div>
            <div class="col-xs-4">
                <input type="submit" class="btn-secondary btn pull-right" name="main-submit" value="Publish Page" style="margin-top: 25px; margin-bottom: 25px;">
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1 no-pad" style="background:rgba(35, 40, 45, 0.90);color: #fff;">
            <div class="row">
                <div class="col-sm-12 no-pad" background-color:#fff;>
                    <form name="banner-form" action="" method="post" onsubmit="window.location.reload()">
                        <div class="col-xs-12">
                           <div class="col-xs-12">
                               <h2>Banner Image</h2>
                               <input type="text" id="block1_img" name="block1_img" value="<?php echo esc_attr($db_values_banner['block1_img']); ?>" class="hide">
                               <input id="upload_image_button" class="btn-primary btn" type="button" value="Choose Image" />
                               <br>
                               <br>   
                           </div>
                            <div id="banner-img" class="col-xs-12 no-pad">
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
                                <input class="title-input text-center" type="text" name="block1_title" value="<?php echo esc_attr(stripslashes_deep($db_values_banner['block1_title'])); ?>" width="100%" style="background: transparent; border: 2px solid #fff; margin-top: 150px; color: #fff;" placeholder="Heading">
                                <input class="title-input text-center" type="text" name="block1_body" value="<?php echo esc_attr(stripslashes_deep($db_values_banner['block1_body'])); ?>" width="100%" style="background: transparent; border: 2px solid #fff; margin-top: 15px; color: #fff; font-weight: 300;" placeholder="Subtitle">
                            </div>
                            <div class="col-xs-12">
                                <input type="submit" class="btn-primary btn" name="banner-submit" value="Save Banner" style="margin-top: 25px; margin-bottom: 25px;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12" style="background: #fff; border-top: 8px solid #F05E23; padding-bottom: 45px;">
                            <br><br>
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                <br><br>
                                <input class="title-input text-center" type="text" name="block2_title" value="<?php echo esc_attr($db_values['block2_title']); ?>" placeholder="Heading" size="30">
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
                                <br><br>
                            </div>
                            <div class="col-xs-12">
                                <br><br>
                                <?php 
                                    $text = stripslashes_deep(wpautop($db_values['block2_issue_body']));
                                    $content = $text;
                                    $editor_id = 'issue_body_editor';
                                    $settings = array(
                                        'textarea_name' => 'block2_issue_body',
                                        'wpautop' => true,
                                        'textarea_rows' => 10
                                    );

                                    wp_editor(wpautop($content), $editor_id, $settings ); 
                                ?>
                                <br><br>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 white-bg">
                            <br><br>
                            <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3">
                                <input class="title-input text-center" type="text" name="block3_title" value="<?php echo esc_attr($db_values['block3_title']); ?>" placeholder="Heading">
                            </div>
                            <div class="col-xs-12">
                                <?php 
                                    $text = stripslashes_deep(wpautop($db_values['block3_body']));
                                    $content = $text;
                                    $editor_id = 'block3_editor';
                                    $settings = array(
                                        'textarea_name' => 'block3_body',
                                        'wpautop' => true,
                                        'textarea_rows' => 10
                                    );

                                    wp_editor(wpautop($content), $editor_id, $settings ); 
                                ?>
                            </div>	
                        </div>
                        <div class="col-xs-12">
                            <h2>Banner Image</h2>
                            <input type="text" id="block3_img" name="block3_img" value="<?php echo esc_attr($db_values['block3_img']); ?>" class="hide">
                            <input id="upload_image_button3" class="btn-primary btn" type="button" value="Choose Image" />
                            <br>
                            <br>
                            <div id="block3-img" class="col-xs-12 no-pad">
                                <?php
                                if(! empty($block3_img)){ ?>
                                <p>Current Background Image:</p>
                                <img class="col-xs-12 no-pad" src="<?php echo esc_attr($db_values['block3_img']); ?>">
                                <?php }
                                else { ?>
                                <div style="background:#777">
                                    <span>No Image to Display</span>
                                </div> 
                                <?php }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <input type="submit" class="btn-secondary btn pull-right" name="main-submit" value="Publish Page" style="margin-top: 25px; margin-bottom: 25px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
        <?php
}
        ?>