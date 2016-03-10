<?php 

function lmd_callback_events(){
    if (isset ($_POST['banner-submit'])) {
        $data = array(
            'block1_img' => sanitize_text_field( $_POST['block1_img'] ),
            'block1_title' => sanitize_text_field( $_POST['block1_title'] ),
            'block1_body'  => sanitize_text_field( $_POST['block1_body'] ),
            'join_banner'  => sanitize_text_field( $_POST['join_banner'] )
        );
        update_option('page_events_banner', $data);
    }
    
    if (isset ($_POST['banner-submit-2'])) {
        $data = array(
            'join_banner'  => sanitize_text_field( $_POST['join_banner'] )
        );
        update_option('page_events_banner2', $data);
    }
    
    if (isset ($_POST['page-submit']) ) {
        $data = array(
            'block2_img' => sanitize_text_field( $_POST['block2_img'] ),
            'block2_title' => sanitize_text_field( $_POST['block2_title'] ),
            'block2_body'  => sanitize_text_field( $_POST['block2_body'] ),
        );
        update_option('page_events', $data);
    }

    $db_values = get_option('page_events');
    foreach ($db_values as $key=>$value) {
        $db_values[$key] = stripslashes($value);
    }
    
    $db_values_banner = get_option('page_events_banner');
    foreach ($db_values_banner as $key=>$value) {
        $db_values_banner[$key] = stripslashes($value);
    }

    //setting empty values to avoid 'undefined index' warning
    $block1_img = '';
    $block1_title = '';
    $block1_body = '';
    $block2_img = '';
    $block2_title = '';
    $block2_body = '';
    $join_banner = '';

    $block1_img = $db_values_banner['block1_img'] ? $db_values_banner['block1_img'] : '';
    
    //if there's any data in options table, updating our variables with relevant data
    if( $db_values ) {
        $block1_title = $db_values_banner['block1_title'] ? $db_values_banner['block1_title'] : '';
        $block1_body = $db_values_banner['block1_body'] ? $db_values_banner['block1_body'] : '';
        $block2_img = $db_values['block2_img'] ? $db_values['block2_img'] : '';
        $block2_title = $db_values['block2_title'] ? $db_values['block2_title'] : '';
        $block2_body = $db_values['block2_body'] ? $db_values['block2_body'] : '';
    }	

    if (isset ($_POST['page-submit2']) ) {
        $data = array(
            'block3_title' => sanitize_text_field( $_POST['block3_title'] ),
            'block3_body' => sanitize_text_field( $_POST['block3_body'] ),
            'block3_img' => sanitize_text_field( $_POST['block3_img'] ),
            'block3_link1' => sanitize_text_field( $_POST['block3_link1'] ),
            'block3_link2' => sanitize_text_field( $_POST['block3_link2'] ),
            'block3_link3' => sanitize_text_field( $_POST['block3_link3'] ),
            'block3_link4' => sanitize_text_field( $_POST['block3_link4'] ),
            'block3_link5' => sanitize_text_field( $_POST['block3_link5'] ),
            'block3_link6' => sanitize_text_field( $_POST['block3_link6'] )
        );
        update_option('page_events2', $data);
    }

    $db_values2 = get_option('page_events2');
    // foreach ($db_values as $key=>$value) {
    // 	$db_values[$key] = stripslashes($value);
    // }

    //setting empty values to avoid 'undefined index' warning
    $block3_img = '';
    $block3_title = '';
    $block3_body = '';
    $block3_link1 = '';
    $block3_link2 = '';
    $block3_link3 = '';
    $block3_link4 = '';
    $block3_link5 = '';
    $block3_link6 = '';

    //if there's any data in options table, updating our variables with relevant data
    if( $db_values2 ) {
        $block3_title = $db_values2['block3_title'] ? $db_values2['block3_title'] : '';
        $block3_img = $db_values2['block3_img'] ? $db_values2['block3_img'] : '';
        $block3_body = $db_values2['block3_body'] ? $db_values2['block3_body'] : '';
        $block3_link1 = $db_values2['block3_link1'] ? $db_values2['block3_link1'] : '';
        $block3_link2 = $db_values2['block3_link2'] ? $db_values2['block3_link2'] : '';
        $block3_link3 = $db_values2['block3_link3'] ? $db_values2['block3_link3'] : '';
        $block3_link4 = $db_values2['block3_link4'] ? $db_values2['block3_link4'] : '';
        $block3_link5 = $db_values2['block3_link5'] ? $db_values2['block3_link5'] : '';
        $block3_link6 = $db_values2['block3_link6'] ? $db_values2['block3_link6'] : '';
    }	

    // The following script handles adding new events and modifying events in DB

    if (isset ($_POST['event-submit']) ) {
        $db_event = get_option('event_details');

        $new_event = array(
            'event_image' => sanitize_text_field( $_POST['event_image'] ),
            'event_name' => sanitize_text_field( $_POST['event_name'] ),
            'event_description' => sanitize_text_field( $_POST['event_description'] ),
            'event_location' => sanitize_text_field( $_POST['event_location'] ),
            'event_time' => sanitize_text_field( $_POST['event_time'] ),
            'event_date' => sanitize_text_field( $_POST['event_date'] ),
            'event_tickets' => sanitize_text_field( $_POST['event_tickets'] )
        );

        if (empty($db_event)){
            add_option('event_details');
            $db_event = [];
            array_push($db_event, $new_event);
            update_option('event_details', $db_event);
        }

        else {
            array_push($db_event, $new_event);
            print_r($db_event);
            update_option('event_details', $db_event);
        }
    }

    // Stripslashes
    $db_event = get_option('event_details');
    // foreach($db_event as $key=>$value) {
    // 	$db_event[$key] = stripslashes($value);
    // }

    // Removes event post
    if (isset ($_POST['remove-btn']) ) {
        $db_event = get_option('event_details');
        $i = 	$_POST['remove-btn']; 
        unset($db_event[$i]);
        $updated_list = array_values($db_event);
        update_option('event_details', $updated_list);
    }

    // Edits event post
    if (isset ($_POST['event-edit-submit']) ) {
        $db_event = get_option('event_details');
        $i = 	$_POST['event-edit-submit']; 
        $updated_event = array(
            'event_image' => sanitize_text_field( $_POST['event_image'] ),
            'event_name' => sanitize_text_field( $_POST['event_name'] ),
            'event_description' => sanitize_text_field( $_POST['event_description'] ),
            'event_location' => sanitize_text_field( $_POST['event_location'] ),
            'event_time' => sanitize_text_field( $_POST['event_time'] ),
            'event_date' => sanitize_text_field( $_POST['event_date'] ),
            'event_tickets' => sanitize_text_field( $_POST['event_tickets'] ),
        );
        $db_event[$i] = $updated_event;
        echo $db_event[$i];
        update_option('event_details', $db_event);
    }

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1" style="background:#23282D;">
            <div class="col-xs-8">
                <h1 class="white-text" style="margin-bottom: 20px;">Events Page</h1>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1" style="background:rgba(35, 40, 45, 0.90);color: #fff;">
            <div class="row">
                <div class="col-sm-12" background-color:#fff;>
                    <form name="banner-form" action="" method="post" onsubmit="window.location.reload()">
                        <div class="col-xs-12">
                            <h2>Banner Image</h2>
                            <input type="text" id="block1_img" name="block1_img" value="<?php echo esc_attr($db_values_banner['block1_img']); ?>" width="100%" class="hide">
                            <input id="upload_image_button" class="btn-primary btn" type="button" value="Choose Image" />
                            <br>
                            <br>
                            <div id="banner-img" style="position:relative;">
                                <?php
                                if(! empty($block1_img)){ ?>
                                <p>Current Banner Image:</p>
                                <img src="<?php echo esc_attr($db_values_banner['block1_img']); ?>" width="100%">
                                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3" style="position:absolute;top:5%;">
                                    <input class="title-input text-center" type="text" name="block1_title" value="<?php echo esc_attr($db_values_banner['block1_title']); ?>" width="100%" style="background: transparent; border: 2px solid #fff; margin-top: 25%; color: #fff;" placeholder="Heading">
                                    <input class="title-input text-center" type="text" name="block1_body" value="<?php echo esc_attr($db_values_banner['block1_body']); ?>" width="100%" style="background: transparent; border: 2px solid #fff; margin-top: 15px; color: #fff; font-weight: 300;" placeholder="Subtitle">
                                </div>
                                <?php }
                                else { ?>
                                <div style="background:#777">
                                    <span>No Image to Display</span>
                                </div>
                                <?php }
                                ?>
                            </div>
                            <input type="submit" class="btn-primary btn" name="banner-submit" value="Save Banner" style="margin-top: 25px; margin-bottom: 25px;">
                        </div>
                    </form>
                </div>
            </div>
            <div class="container-fluid no-pad" style="border-top: 8px solid #F05E23;"></div>
            <div class="container-fluid">
               <div class="row">
                   <!-- Button trigger modal -->
                   <br>
                   <div class="col-xs-12">
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newEvent">
                            Add Event
                        </button>
                        <br><br>
                   </div>
                   <br>
                   <!-- Modal -->
                   <form name="event-details-form" action="" method="post">
                       <div class="modal fade" id="newEvent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                           <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                   </div>
                                   <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div id="event-img" style="background:#777">
                                                <img src="<?php echo plugins_url( '/assets/svgs/no-image.svg', __FILE__ )?>" width="100%">
                                            </div> 
                                            <br>
                                            <input id="upload_event_img" class="btn-primary btn" type="button" value="Choose Image" />
                                            <input type="text" id="event-image" name="event_image" value="" size="30" style="width:65%; visibility: hidden;">    
                                            
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" name="event_name" value="" size="30" style="width:100%;" placeholder="Event Name"><br><br>
                                            <input class="datepicker" type="text" name="event_date" value="" size="30" style="width:100%;" placeholder="Event Date"><br><br>
                                            <input type="text" name="event_time" value="" size="30" style="width:100%;" placeholder="Event Time"><br><br>
                                        </div>
                                        <div class="col-xs-12">
                                            <textarea name="event_description" rows="3" style="width:100%;" placeholder="Event Description"></textarea><br><br>
                                            <input type="text" name="event_location" value="" size="30" style="width:100%;" placeholder="Event Location"><br><br>
                                            <input type="text" name="event_tickets" value="" placeholder="http://www.paypal.com"size="30" style="width:100%;" placeholder="Payment Gateway">
                                            <br>
                                            <br>
                                        </div>
                                    </div>

                                   </div>
                                   <div class="modal-footer" style="border: none;">
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                       <input type="submit" id="submit-event-btn" class="btn-primary btn" name="event-submit" value="Add Event">
                                   </div>
                               </div>
                           </div>
                       </div>
                   </form>
               </div>
               
                <div class="row">
                    <div class="col-xs-12" style="margin-bottom:25px;">
                        <?php 
                        $db_event_list = get_option('event_details');
                        $length = count($db_event_list);

                        if (empty($db_event_list)) { ?>
                            <div class="col-xs-12 block" style="color: #333;">
                                <?php echo 'No upcoming events to display.'; ?>
                            </div> <?php }
                        if (!empty($db_event_list)){
                            echo '<h2>Upcoming Events</h2>';
                            for ($i = 0; $i < $length; $i++) { ?>
                        <div class="col-xs-12" style="background: #fff;padding-bottom:20px;">
                            <form action="" method="post">
                                <button type="submit" class="remove-btn" name="remove-btn" value="<?php echo $i ?>" 
                                        style="background-color:#313131;color:white;border-radius:15px;width:29px;position:absolute;top: -14px;right: -12px;">x</button>

                                <h4><?php echo $db_event_list[$i]['event_name'] ?></h4>
                                <div class="col-xs-12 col-sm-5">
                                    <div id="event-img-edit-<?php echo $i ?>">
                                        <img width="100%" src="<?php echo $db_event_list[$i]['event_image']?>" >
                                    </div><br>
                                    <input id="event_image_edit_button" class="btn-primary btn event-edit" type="button" value="Choose Image" name="<?php echo $i ?>" />
                                    <input type="text" id="event-image-edit" name="event_image" value="<?php echo $db_event_list[$i]['event_image'] ?>" style="width:65%;visibility:hidden;">
                                </div>
                                <div class="col-xs-12 col-sm-7">
                                    <input class="col-xs-12 col-sm-6" type="text" name="event_name" value="<?php echo esc_attr($db_event_list[$i]['event_name']); ?>" size="30"><br><br>
                                    <input class="col-xs-12 col-sm-6" type="text" name="event_date" class="datepicker" value="<?php echo esc_attr($db_event_list[$i]['event_date']); ?>" size="30">
                                    <textarea name="event_description" id="" rows="3" style="width:100%;" placeholder="Event Description"><?php echo esc_attr($db_event_list[$i]['event_description']); ?></textarea>
                                    <input type="text" name="event_location" value="<?php echo esc_attr($db_event_list[$i]['event_location']); ?>" size="30" placeholder="Event Location"><br><br>
                                    <input type="text" name="event_time" value="<?php echo esc_attr($db_event_list[$i]['event_time']); ?>" size="30" placeholder="Event Time"><br><br>
                                    <input type="text" name="event_tickets" value="<?php echo esc_attr($db_event_list[$i]['event_tickets']); ?>" size="30" placeholder="Event Tickets"><br><br>
                                    <button type="submit" name="event-edit-submit" class="btn btn-secondary" value="<?php echo $i ?>">Save Changes</button>
                                    
                                </div>
                            </form>
                        </div>
                        <?php } 
                        }
                        ?>
                        
                    </div>
                    
                    <div class="col-xs-12" style="border-top: 8px solid #F05E23;padding-top:25px;">
                        <form name="banner-form" action="" method="post" onsubmit="window.location.reload()">
                            <div class="col-xs-12">
                                <h2>Join | Contribute Banner Image</h2>
                                <div id="banner-join-img">
                                    
                                </div>
                                <input type="text" id="join_banner" name="join_banner" value="" width="100%" class="hide">
                                <input id="upload_join_banner" class="btn-primary btn" type="button" value="Choose Image" />
                                <br>
                                <br>
                                
                                    <?php
                                    $join_banner_data = get_option('page_events_banner2');
                                    $join_banner = $join_banner_data['join_banner'];
                                    if(! empty($join_banner)){ ?>
                                       
                                        <div id="banner" class="col-xs-12">                         
                                            <img class="col-xs-12" src="<?php echo $join_banner ?>">
                                        </div>
                                        <?php }
                                    else { ?>
                                    <div style="background:#777">
                                        <span>No Image to Display</span>
                                    </div>
                                    <?php }
                                    ?>
<!--
                                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3" style="position:absolute;">
                                        <input class="title-input text-center" type="text" name="join_banner" value="<?php echo esc_attr($db_values_banner['join_banner']); ?>" width="100%" style="background: transparent; border: 2px solid #fff; margin-top: 150px; color: #fff;" placeholder="Heading">
                                        <input class="title-input text-center" type="text" name="block1_body" value="<?php echo esc_attr($db_values_banner['block1_body']); ?>" width="100%" style="background: transparent; border: 2px solid #fff; margin-top: 15px; color: #fff; font-weight: 300;" placeholder="Subtitle">
                                    </div>
-->
                                <input type="submit" class="btn-primary btn" name="banner-submit-2" value="Save Banner" style="margin-top: 25px; margin-bottom: 25px;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php };
?>
