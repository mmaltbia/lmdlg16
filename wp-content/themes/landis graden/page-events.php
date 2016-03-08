<?php 
    get_header(); 

    $event_data = get_option('event_details');
    $length = count($event_data);

    $data_banner = get_option('page_events_banner');
    foreach ($data_banner as $key=>$value) {
        $data_banner[$key] = stripslashes($value);
    }
?>
<div class="container-fluid" style="background-image: url('<?php echo $data_banner['block1_img']?>'); background-attachment: fixed; background-size: stretch; min-height: 550px;">
    <div class="row">
        <div>
            <div class="col-xs-12 text-center title-text white-text" style="padding-left: 0px;padding-right: 0px;margin-top:20%;">
                <h1><?php echo $data_banner['block1_title']?></h1>
                <span><?php echo $data_banner['block1_body']?></span>
            </div>
        </div> 
    </div>
</div>
<div class="container-fluid">
    <div class="event-list row" style="padding-bottom: 45px; padding-top: 45px;">
        <?php
    if (!empty($event_data)){
        for ($i=0; $i<$length; $i++){
            $event_image = $event_data[$i]['event_image'];
            $event_name = $event_data[$i]['event_name'];
            $event_description = $event_data[$i]['event_description'];
            $event_time = $event_data[$i]['event_time'];
            $event_location = $event_data[$i]['event_location'];
            $event_date = $event_data[$i]['event_date'];
            $event_tickets = $event_data[$i]['event_tickets'];

        ?>
        <div class="row event-section">
            <div class="col-xs-12 col-sm-2">
                <img src="<?php echo $event_image ?>" class="event-img" style="width:100%;">
            </div>
            <div class="col-xs-12 col-sm-7 text-left">
                <h2 style="text-transform: uppercase; font-weight: bold;"><?php echo $event_name ?></h2>
                <h3 class="col-xs-12"><?php echo $event_date ?></h3>
                <span class="col-xs-12"><?php echo $event_description ?></span>
                <span class="col-xs-12"><?php echo $event_location ?></span>
                <span class="col-xs-12"><?php echo $event_time ?></span>
                <?php 
            if(!empty($event_tickets)){
                ?>
                <br>
                <div class="col-xs-6">
                    <a href="<?php echo $event_tickets ?>">
                        <button type="button" class="black-box" style="width: 80%;">Buy Tickets</button>
                    </a>
                </div>
                <br>
                <br>
                <?php 
            }
                ?>
            </div>
            <div class="col-xs-12 col-sm-3">
                <h4>Never miss an event again!</h4>
                <p>Join our email newsletter for monthly updates directly in your inbox.</p>
                <form action="" method="post">
                    <input type="text" name="email_address" value="Email" style="width: 100%"><br>
                    <input type="submit" name="newsletter-submit" value="Join" class="btn btn-primary">
                </form>
            </div>
        </div>	
        <?php 
        }
        ?>	
        
    </div>
    <?php  }
                 else { ?>
    <!-- Container 2 -->
    <div class="row row2">
        <div class="col-xs-12 col-sm-7">
            <h1>Events</h1>
            <h3>No events to display. Check back soon!</h3>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-xs-12 col-sm-4" style="border: 1px solid #ccc;padding: 10px; background: #dcdcdc; border-radius: 5px;">
                <div class="row" style="padding: 20px; padding-top:0; padding-bottom: 0;">
                    <form action="<?php echo home_url();?>/join" method="post">
                        <h3>Join the Campaign.</h3><br>
                        <input id="join_email" type="text" name="message_email" placeholder="email address" value="<?php echo esc_attr($_POST['message_email']); ?>" style="color: darkgray;width: 100%; line-height: 3;">
                        <input id="join-btn" type="submit" name="join-submit" class="btn btn-primary pull-right" value="Next">
                    </form>
                </div>
        </div>
    </div>
    <?php
                 }	 
    ?>
</div>



<?php 
get_footer(); ?>