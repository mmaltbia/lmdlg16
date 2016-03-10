<?php 
function lmd_callback_join(){
    if (isset ($_POST['banner-submit'])) {
        $data = array(
            'block1_img' => sanitize_text_field( $_POST['block1_img'] )
        );
        update_option('page_join_banner', $data);
    }

    $db_values_banner = get_option('page_join_banner');
    foreach ($db_values_banner as $key=>$value) {
        $db_values_banner[$key] = stripslashes($value);
    }
    echo $db_values_banner['block1_img'];

    //setting empty values to avoid 'undefined index' warning
    $block1_img = '';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1" style="background:#23282D;">
            <div class="col-xs-8">
                <h1 class="white-text" style="margin-bottom: 20px;">Join Page</h1>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1" style="background:rgba(35, 40, 45, 0.90);color: #fff;">
            <div class="row">
                <div class="col-sm-12" background-color:#fff;>
                    <form name="banner-form" action="" method="post" onsubmit="window.location.reload()">
                        <div class="col-xs-12">
                            <h2>Banner Image</h2>
                            <input type="text" id="block1_img" name="block1_img" value="<?php echo esc_attr($db_values_banner['block1_img']); ?>" size="30" class="hide">
                            <input id="upload_image_button" class="btn-primary btn" type="button" value="Choose Image" />
                            <br>
                            <br>
                            <div id="banner-img" class="col-xs-12 no-pad">
                                <?php
    if(! empty($db_values_banner['block1_img'])){ ?>
                                <p>Current Banner Image:</p>
                                <img class="col-xs-12 no-pad" src="<?php echo esc_attr($db_values_banner['block1_img']); ?>">
                                <?php }
    else { ?>
                                <div style="background:#777">
                                    <span>No Image to Display</span>
                                </div> 
                                <?php }
                                ?>
                            </div>
                            <input type="submit" class="btn-primary btn" name="banner-submit" value="Save Banner" style="margin-top: 25px;margin-bottom:25px;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php } ?>