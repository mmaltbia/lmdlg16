<?php 

function lmd_callback_about(){
    if (isset ($_POST['banner-submit'])) {
        $data = array(
            'block1_img' => sanitize_text_field( $_POST['block1_img'] ),
            'block1_title' => sanitize_text_field( $_POST['block1_title'] ),
            'block1_body' => sanitize_text_field( $_POST['block1_body'] )
        );
        update_option('page_about_banner', $data);
    }

    if (isset ($_POST['main-submit'])) {
        $data = array(
            'block2_title' => sanitize_text_field( $_POST['block2_title'] ),
            'block2_body'  => wpautop( $_POST['block2_body'] ),
            'block2_video'  => sanitize_text_field( $_POST['block2_video'] ),
            'block3_title' => sanitize_text_field( $_POST['block3_title'] ),
            'block3_panel1_title'  => sanitize_text_field( $_POST['block3_panel1_title'] ),
            'block3_panel2_title'  => sanitize_text_field( $_POST['block3_panel2_title'] ),
            'block3_panel3_title'  => sanitize_text_field( $_POST['block3_panel3_title'] ),
            'block3_panel4_title'  => sanitize_text_field( $_POST['block3_panel4_title'] ),
            'block3_panel1'  => wpautop( $_POST['block3_panel1'] ),
            'block3_panel2'  => wpautop( $_POST['block3_panel2'] ),
            'block3_panel3'  => wpautop( $_POST['block3_panel3'] ),
            'block3_panel4'  => wpautop( $_POST['block3_panel4'] ),
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
        update_option('page_about', $data);
    }

    $db_values = get_option('page_about');
    foreach ($db_values as $key=>$value) {
        $db_values[$key] = stripslashes($value);
    }
    

    $db_values_banner = get_option('page_about_banner');
    foreach ($db_values as $key=>$value) {
        $db_values[$key] = stripslashes($value);
    }

    //setting empty values to avoid 'undefined index' warning
    $block1_img = '';
    $block1_title = '';
    $block1_body = '';
    $block2_video = '';
    $block2_title = '';
    $block2_body = '';
    $block2_img = '';
    $block3_img = '';
    $block3_title = '';
    $block3_panel1_title = '';
    $block3_panel2_title = '';
    $block3_panel3_title = '';
    $block3_panel4_title = '';
    $block3_panel1 = '';
    $block3_panel2 = '';
    $block3_panel3 = '';
    $block3_panel4 = '';
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
    $block2_video = $db_values['block2_video'] ? $db_values['block2_video'] : '';
    $block3_img = $db_values['block3_img'] ? $db_values['block3_img'] : '';
    $block3_title = $db_values['block3_title'] ? $db_values['block3_title'] : '';
    $block3_panel1_title = $db_values['block3_panel1_title'] ? $db_values['block3_panel1_title'] : '';
    $block3_panel2_title = $db_values['block3_panel2_title'] ? $db_values['block3_panel2_title'] : '';
    $block3_panel3_title = $db_values['block3_panel3_title'] ? $db_values['block3_panel3_title'] : '';
    $block3_panel4_title = $db_values['block3_panel4_title'] ? $db_values['block3_panel4_title'] : '';
    $block3_panel1 = $db_values['block3_panel1'] ? $db_values['block3_panel1'] : '';
    $block3_panel2 = $db_values['block3_panel2'] ? $db_values['block3_panel2'] : '';
    $block3_panel3 = $db_values['block3_panel3'] ? $db_values['block3_panel3'] : '';
    $block3_panel4 = $db_values['block3_panel4'] ? $db_values['block3_panel4'] : '';
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
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1" style="background:#23282D;">
            <div class="col-xs-8">
                <h1 class="white-text" style="margin-bottom: 20px;">About Page</h1>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1 no-pad" style="background:rgba(35, 40, 45, 0.90);color: #fff;">
            <div class="row">
                <div class="col-sm-12 no-pad" background-color:#fff;>
                    <form name="banner-form" action="" method="post" onsubmit="window.location.reload()">
                        <div class="col-xs-12">
                           <div class="col-xs-12" style="padding-left:30px;">
                               <h2>Banner Image</h2>
                               <input type="text" id="block1_img" name="block1_img" value="<?php echo esc_attr($db_values_banner['block1_img']); ?>" width="100%" class="hide">
                               <input id="upload_image_button" class="btn-primary btn" type="button" value="Choose Image" />
                               <br>
                               <br> 
                           </div>
                            
                            <div id="banner-img" class="col-xs-12 no-pad">
                                <?php
                                if(! empty($block1_img)){ ?>
                                <p class="col-xs-12" style="padding-left:30px;">Current Banner Image:</p>
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
                            <div class="col-xs-12" style="padding-left:30px;">
                                <input type="submit" class="btn-primary btn" name="banner-submit" value="Save Banner" style="margin-top: 25px; margin-bottom: 25px;">   
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <form name="main-form" action="" method="post">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12" style="background: #dcdcdc; border-top: 8px solid #F05E23; padding-bottom: 45px;">
                            <br><br>
                            <div class="col-xs-12 col-sm-8">
                                <?php 
                                    $text = stripslashes_deep(wpautop($db_values['block2_body']));
                                    $content = $text;
                                    $editor_id = 'about_editor';
                                    $settings = array(
                                        'textarea_name' => 'block2_body',
                                        'wpautop' => true,
                                        'textarea_rows' => 16
                                    );

                                    wp_editor(wpautop($content), $editor_id, $settings ); 
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <object data="<?php echo plugins_url('/assets/svgs/video.svg', __FILE__ );?>" type="image/svg+xml" width="100%"></object>
                                <span><object data="<?php echo plugins_url( '/assets/question.svg', __FILE__ ) ?>" type="image/svg+xml"></object>&nbsp;&nbsp;video column will be removed if no video specified.</span>
                                <?php 
                                    $myStyle = '<style type="text/css">
                                       body{background: red;}
                                       </style>';
                                    $text = stripslashes_deep(wpautop($db_values['block2_video']));
                                    $content = $text;
                                    $editor_id = 'video_editor';
                                    $settings = array(
                                        'textarea_name' => 'block2_video',
                                        'wpautop' => true,
                                        'textarea_rows' => 2,
                                        'media_buttons' => false,
                                        'content_css' => $myStyle
                                    );

                                    wp_editor(wpautop($content), $editor_id, $settings ); 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 white-bg">
                            <br><br>
                            <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3">
                                <p>Title:</p>
                                <input class="title-input text-center" type="text" name="block3_title" value="<?php echo esc_attr($db_values['block3_title']); ?>" placeholder="Heading">
                                <br><br>
                            </div>
                            <div class="col-xs-12">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                                                <h4 class="panel-title">
                                                <input class="title-input" type="text" name="block3_panel1_title" value="<?php echo esc_attr($db_values['block3_panel1_title']); ?>" size="1" placeholder="Collapsable Group Heading 1">
                                                </h4>
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php 
                                                    $text = stripslashes_deep(wpautop($db_values['block3_panel1']));
                                                    $content = $text;
                                                    $editor_id = 'panel1_editor';
                                                    $settings = array(
                                                        'textarea_name' => 'block3_panel1',
                                                        'wpautop' => true,
                                                        'textarea_rows' => 10
                                                    );

                                                    wp_editor(wpautop($content), $editor_id, $settings ); 
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="">
                                                <h4 class="panel-title">
                                                    <input class="title-input" type="text" name="block3_panel2_title" value="<?php echo esc_attr($db_values['block3_panel2_title']); ?>" size="1" placeholder="Collapsable Group Heading 2">
                                                </h4>
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php 
                                                    $text = stripslashes_deep(wpautop($db_values['block3_panel2']));
                                                    $content = $text;
                                                    $editor_id = 'panel2_editor';
                                                    $settings = array(
                                                        'textarea_name' => 'block3_panel2',
                                                        'wpautop' => true,
                                                        'textarea_rows' => 10
                                                    );

                                                    wp_editor(wpautop($content), $editor_id, $settings ); 
                                                ?>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="">
                                                    <h4 class="panel-title">
                                                        <input class="title-input" type="text" name="block3_panel3_title" value="<?php echo esc_attr($db_values['block3_panel3_title']); ?>" size="1" placeholder="Collapsable Group Heading 3">
                                                    </h4>
                                                </a>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <?php 
                                                        $text = stripslashes_deep(wpautop($db_values['block3_panel3']));
                                                        $content = $text;
                                                        $editor_id = 'panel3_editor';
                                                        $settings = array(
                                                            'textarea_name' => 'block3_panel3',
                                                            'wpautop' => true,
                                                            'textarea_rows' => 10
                                                        );

                                                        wp_editor(wpautop($content), $editor_id, $settings ); 
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="">
                                                        <h4 class="panel-title">
                                                            <input class="title-input" type="text" name="block3_panel4_title" value="<?php echo esc_attr($db_values['block3_panel4_title']); ?>" size="1" placeholder="Collapsable Group Heading 4">
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <?php 
                                                            $text = stripslashes_deep(wpautop($db_values['block3_panel4']));
                                                            $content = $text;
                                                            $editor_id = 'panel4_editor';
                                                            $settings = array(
                                                                'textarea_name' => 'block3_panel4',
                                                                'wpautop' => true,
                                                                'textarea_rows' => 10
                                                            );

                                                            wp_editor(wpautop($content), $editor_id, $settings ); 
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>	
                        </div>
                        <div class="col-xs-12">
                            <input type="submit" class="btn-secondary btn pull-right" name="main-submit" value="Publish Page" style="margin-top: 25px; margin-bottom: 25px;">
                        </div>
                    </div>
                </div>
            </form>
        </div>
<?php
}
?>