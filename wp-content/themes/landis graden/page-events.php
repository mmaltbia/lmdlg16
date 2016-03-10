<?php 
    get_header(); 
    
    $event_data = get_option('event_details');
    $length = count($event_data);

    $data_banner = get_option('page_events_banner');
    foreach ($data_banner as $key=>$value) {
        $data_banner[$key] = stripslashes($value);
    }
    
    $join_banner = get_option('page_events_banner2');
?>
<div class="container-fluid" style="background-image: url('<?php echo $data_banner['block1_img']?>'); background-attachment: fixed; background-size: cover; min-height: 550px;">
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
    <div class="row revealOnScroll" data-animation="flipInX" style="padding-bottom: 45px; padding-top: 45px;">
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
        
        <div class="col-xs-12 col-sm-4">
            <img src="<?php echo $event_image ?>" class="event-img" style="width:100%;">
        </div>
        <div class="col-xs-12 col-sm-8 text-left">
            <h2 style="text-transform:uppercase;font-weight:bold;background: #F05E22;color: #fff;padding: 7px;padding-left:10px;"><?php echo $event_name ?></h2>
            <h3 class="col-xs-12"><?php echo $event_date ?></h3>
            <span class="col-xs-12"><?php echo $event_description ?></span>
            <span class="col-xs-12" style="margin-top:18px;"><?php echo $event_location ?>, <?php echo $event_time ?></span>
            
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
        <?php 
        }
        ?>	
        
    </div>
    <?php  }
                 else { ?>
    <!-- Container 2 -->
        <div class="col-xs-1"></div>
        <div class="col-xs-11 col-sm-7">
            <h1>Events</h1>
            <h3>No events to display. Check back soon!</h3>
        </div>
    <?php
                 }	 
    ?>
   </div>
    <div class="row" style="background-image: url('<?php echo $join_banner['join_banner'] ?>'); min-height: 450px; z-index: 0; color: #fff;margin-top:175px;padding-top:10%;padding-bottom:10%;">
        <div class="col-xs-12 revealOnScroll" data-animation="flipInX">
            <div class="col-xs-12 col-sm-6" style="padding-left: 30px;padding-right: 30px;" >
                <h1>Join Team Landis.</h1>
                <?php  if (isset($_POST['join-submit']) && ! empty($_POST['message_email'])) { 
    $email = $_POST['message_email'];
} ?>
                <form id="join-team" action="<?php echo home_url();?>/join" method="post">
                    <div class="row">
                        <input id="join_email" class="form-width" type="text" name="message_email" placeholder="email address" value="<?php echo esc_attr($_POST['message_email']); ?>" style="color:darkgray;">
                    </div>
                    <div class="row">
                        <input id="join-btn" type="submit" name="join-submit" class="btn btn-primary" value="Next">
                    </div>
                </form>
            </div>
            <div class="col-xs-1"></div>
            <div class="col-xs-12 col-sm-5">
                <h1>Contribute.</h1>
                <button class="btn lmd-give-btn">$35</button>
                <button class="btn lmd-give-btn">$100</button>
                <button class="btn lmd-give-btn">$250</button>
                <button class="btn lmd-give-btn">$500</button>
                <button class="btn lmd-give-btn">$1000</button>
                <br>
                <a href="<?php echo home_url();?>/donate">
                    <button class="btn btn-primary" style="padding: 45px;padding-top: 15px; padding-bottom: 15px; text-transform: uppercase; margin-top: 20px; font-family: 'Open-bold', sans-serif;" >Next</button>
                </a>
            </div>
        </div>
    </div>





<?php 
get_footer(); ?>