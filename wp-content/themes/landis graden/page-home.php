<?php 

  //response generation function

  $response = "";

  //function to generate response
//  function my_contact_form_generate_response($type, $message){

//    global $response;
//
//    if($type == "success") $response = "<div class='success'>{$message}</div>";
//    else $response = "<div class='error'>{$message}</div>";
//
//  }
//
//  //response messages
//  $email_invalid   = "Email Address Invalid.";
//  $message_sent    = "Thanks! Your message has been sent.";
//
//  //user posted variables
//  $email = $_POST['message_email'];
//  $issue_1 = $POST['issue_1'];
//  $issue_2 = $POST['issue_2'];
//  $issue_3 = $POST['issue_3'];
//  $issue_4 = $POST['issue_4'];
//  $issue_5 = $POST['issue_5'];
//  $issue_6 = $POST['issue_6'];
//  $comments = $POST['comments'];

  
//  if (!empty($_POST['join-submit'])) {
//       //php mailer variables
//      function joinSubmit(){
//          $email = $_POST['message_email'];
//          $location = add_query_arg( 'email', $email , site_url( '/join/' ) );
//          
//          wp_redirect( $location);
//          $to = get_option('admin_email');
//          $subject = "Someone joined the campaign!";
//          $headers = 'From: '. $email . "\r\n" .
//              'Reply-To: ' . $email . "\r\n";
//
//          //validate email
//          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//              my_contact_form_generate_response("error", $email_invalid);
//          }
//          if (filter_var($email, FILTER_VALIDATE_EMAIL))//email is valid
//          {
//              //validate presence of name and message
//              $sent = wp_mail($to, $subject, $headers);
//              if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
//              else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
//          }
//
//          else{ my_contact_form_generate_response("error", "Email not submitted.");
//              }
//      }
//      
//      joinSubmit();
//       
//  }

  if (!empty($_POST['take-submit'])) {
     //php mailer variables
     $to = get_option('admin_email');
     $subject = "Someone filled out Take Action!";
     $headers = 'The issues: '. $issue_1 . $issue_2 . $issue_3 . $issue_4 . $issue_5 . $issue_6 . "\r\n" .
       'Other remarks: ' . $comments . "\r\n";

     //validate presence of name and message
     $take_action_sent = wp_mail($to, $subject, $headers);
              
  }

get_header(); 
	$data = get_option('page_home');
    $data_banner = get_option('page_home_banner');
	foreach ($data as $key=>$value) {
		$data[$key] = stripslashes($value);
	}

	$banner_data = get_option('page_home_banner');

	$length = count($banner_data);
	$block1_img = $data_banner['block1_img'];
    $block1_title = $data_banner['block1_title'];
    $block1_body = $data_banner['block1_body'];
	$block2_img = $data['block2_img'];
	$block2_title = $data['block2_title'];
	$block2_body = $data['block2_body'];
	$block2_body_1 = $data['block2_body_1'];
	$block2_body_2 = $data['block2_body_2'];
	$block2_body_3 = $data['block2_body_3'];
	$block2_body_4 = $data['block2_body_4'];

	$block3_img = $data['block3_img'];
	$block3_title = $data['block3_title'];
	$block3_body = $data['block3_body'];
	$block4_title = $data['block4_title'];
	$block4_body = $data['block4_body'];
	$block4_issue1 = $data['block4_issue1'];
	$block4_issue2 = $data['block4_issue2'];
	$block4_issue3 = $data['block4_issue3'];
	$block4_issue4 = $data['block4_issue4'];
	$block4_issue5 = $data['block4_issue5'];
	$block4_issue6 = $data['block4_issue6'];

?>

	<!-- Container 1 -->
<div class="container-fluid" style="background-image: url('<?php echo $block1_img?>'); background-attachment: fixed; min-height: 550px;">
    <div class="row">
	  <div>
	    <div class="col-xs-12 text-center title-text white-text" style="padding-left: 0px;padding-right: 0px;margin-top:20%;">
            <h1><?php echo $banner_data['block1_title']?></h1>
            <span><?php echo stripslashes_deep($banner_data['block1_body'])?></span>
	    </div>
	  </div> 
    </div>
</div>
	
	<!-- Container 2 -->
	<div id="meet-landis" class="container-fluid"> 
		<div class="row med-pad">
			<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center block">
				<h1 class="gray-box"><?php echo $block2_title ?></h1>
			</div>
			<div class="col-xs-12 col-sm-6 text-center col-sm-offset-3">
				<p><?php echo $block2_body ?></p>
			</div>
			
		</div>
	</div>
	<!-- Container 3 / Join the Campaign / Give -->
	<div id="donate" class="container-fluid white-text text-left" style="background: url('<?php echo get_bloginfo('template_directory'); ?>/images/blue-logo-bg.png'); min-height: 450px; z-index: 0"> 
		<div class="row row2" style="z-index: 3;">
			<div class="col-xs-12">
				<div class="col-xs-12 col-sm-6" style="padding-left: 30px;padding-right: 30px;" >
					<h1>Join Team Landis.</h1>
                    <?php  if (isset($_POST['join-submit']) && ! empty($_POST['message_email'])) { 
                        $email = $_POST['message_email'];
                    } ?>
                    <form id="join-team" action="join" method="post">
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
					<h1>Then Contribute.</h1>
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
	</div>
	<!-- Container 4 Take Action-->
	<div class="container-fluid" id="issues"> 
		<div class="row med-pad">
			<div class="col-xs-12 text-center">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center block">
					<h1 class="gray-box"><?php echo $block4_title ?></h1>
				</div>
				<div class="col-xs-12 col-sm-6 text-center col-sm-offset-3">
					<p><?php echo $block4_body ?></p>
				</div>
			
			</div>
		</div>
	</div>
	

			
<?php get_footer(); ?>