<!--March 1 Issues Callback Page-->
                    

<!-- End March 1 Issues Callback Page-->  
                
<!-- <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-left">

					<form id="take-action-form" name="take-action-form" action="<?php the_permalink(); ?>" method="post" data-parsley-validate>
					  <div class="col-sm-6">
					  	<input id="<?php echo $block4_issue1 ?>"type="checkbox" class="css-checkbox" name="issue_1" value="<?php echo $block4_issue1 ?>"><label class="css-label" for="<?php echo $block4_issue1 ?>">&nbsp;&nbsp;<?php echo $block4_issue1 ?></label><br>
					  	<input id="<?php echo $block4_issue2 ?>"type="checkbox" class="css-checkbox" name="issue_2" value="<?php echo $block4_issue2 ?>"><label class="css-label" for="<?php echo $block4_issue2 ?>">&nbsp;&nbsp;<?php echo $block4_issue2 ?></label><br>
					  	<input id="<?php echo $block4_issue3 ?>"type="checkbox" class="css-checkbox" name="issue_3" value="<?php echo $block4_issue3 ?>"><label class="css-label" for="<?php echo $block4_issue3 ?>">&nbsp;&nbsp;<?php echo $block4_issue3 ?></label><br>
					  </div>
					  <div class="col-sm-6">
					  	<input id="<?php echo $block4_issue4 ?>"type="checkbox" class="css-checkbox" name="issue_4" value="<?php echo $block4_issue4 ?>"><label class="css-label" for="<?php echo $block4_issue4 ?>">&nbsp;&nbsp;<?php echo $block4_issue4 ?></label><br>
					  	<input id="<?php echo $block4_issue5 ?>"type="checkbox" class="css-checkbox" name="issue_5" value="<?php echo $block4_issue5 ?>"><label class="css-label" for="<?php echo $block4_issue5 ?>">&nbsp;&nbsp;<?php echo $block4_issue5 ?></label><br>
					  	<input id="<?php echo $block4_issue6 ?>"type="checkbox" class="css-checkbox" name="issue_6" value="<?php echo $block4_issue6 ?>"><label class="css-label" for="<?php echo $block4_issue6 ?>">&nbsp;&nbsp;<?php echo $block4_issue6 ?></label><br>
					  </div>
					  <div class="col-xs-12">
					  	<textarea name="comments" rows="3" placeholder="Have we missed any? Please send us your thoughts. We want to hear from you!" style="width: 100%; border: 2px solid darkgray; margin-top: 35px;"><?php echo esc_attr($_POST['comments']); ?></textarea>
					  	<input type="submit" name="take-submit" class="btn btn-primary" value="Submit">
					  </div>
					</form>
				</div> -->
				
			
<?php get_header();

if (isset($_POST['join-submit']) && ! empty($_POST['message_email'])) {   
    $lg_email= $_POST['message_email'];
}

//response generation function

$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){   
    global $response;

    if($type == "success") {$response = "<div class='success'>{$message}</div>";}
    else{ $response = "<div class='error'>{$message}</div>";}

}

//response messages
$message_unsent   = "Join Unsuccessful.";
$message_sent    = "Thanks for Joining the Campaign!";

//user posted variables
$email = $_POST['visitor_email'];
$name = $_POST['visitor_name'];
$phone = $_POST['phone'];
$volunteer = '';
$host = '';
$lawn = '';
$list = '';
if (isset($_POST['join-info-submit'])) {

    if(!empty($_POST['checklist'])) {
        foreach($_POST['checklist'] as $check) {
            if($check === "volunteer"){
                $volunteer = 'Volunteer';
            }
            else if($check === "host"){
                $host = 'Host';
            }
            else if($check === "lawn"){
                $lawn = 'Lawn Sign';
            }
            else if ($check === "list"){
                $list = 'Listserv';
            }
        }
    }
    //php mailer variables
    $to = get_option('admin_email');
    $subject = "Someone joined the campaign!";
    $headers = 
        'Name: '. $name . "\r\n" .
        'Email: ' . $email . "\r\n" .
        'Phone Number: ' . $phone . "\r\n" .
        'Volunteer: ' .  $volunteer . ', ' . $host . ', ' . $lawn . ', ' . $list . "\r\n";

    //validate presence of name and message
    $sent = wp_mail($to, $subject, $headers);
    if($sent){
        my_contact_form_generate_response("success", $message_sent); //message sent!
    } 
    else{
        my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
    } 



}


?>
<div class="container-fluid" style="background: #02429E;margin-top:-10px;">
    <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
        <div id="join-form-div" class="col-xs-12 col-sm-8 col-sm-offset-2" style="background: #fff;padding:20px;padding-left:45px;padding-bottom:40px;padding-right:45px;">
            <?php echo $response; ?>
            <form id="join-form" class="animated fadeIn" action="" method="post">
                <h1>Join the Campaign</h1>
                <input type="text" name="visitor_name" value="" placeholder="Full Name" required>
                <br><br>
                <input type="email" name="visitor_email" value="<?php echo $lg_email ?>" required>
                <br><br>
                <input type="tel" name="phone" value="" placeholder="Phone Number" pattern='[\(]\d{3}[\)]\d{3}[\-]\d{4}|\d{3}[\.]\d{3}[\.]\d{4}|\d{10}|\d{3}\s\d{3}\s\d{4}|\d{3}[\-]\d{3}[\-]\d{4}|[\(]\d{3}[\)]\s\d{3}[\-]\d{4}'required>
                <br><br>
                <label for="">I'm Interested In (Check all that apply):</label><br>
                <div class="col-xs-12" style="padding:0;">
                    <div class="col-xs-12 col-sm-6">
                        <input type="checkbox" name="checklist[]" value="volunteer">&nbsp;Volunteering <br>
                        <input type="checkbox" name="checklist[]" value="host">&nbsp;Hosting a House Party
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="checkbox" name="checklist[]" value="lawn">&nbsp;Lawn Sign <br>
                        <input type="checkbox" name="checklist[]" value="list">&nbsp;Joining the Listserv
                        <br><br>
                    </div>
                    <div class="col-xs-12">
                        <input class="btn-primary pull-right" type="submit" value="Submit" name="join-info-submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php get_footer(); ?>