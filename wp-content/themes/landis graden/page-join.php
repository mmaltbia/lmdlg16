<?php get_header();

$data_banner = get_option('page_join_banner');
foreach ($data_banner as $key=>$value) {
    $data_banner[$key] = stripslashes($value);
}
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
    $walking = '';
    $phoning = '';
    $host = '';
    $lawn = '';
    $list = '';
    $becoming = '';
    $arr = array();
  if (isset($_POST['join-info-submit'])) {
      
      if(!empty($_POST['checklist'])) {
          
          foreach($_POST['checklist'] as $check) {
              if($check === "walking"){
                  $walking = "'Walking with Landis'";
                  $arr[]= "'Walking with Landis'";
              }
              else if($check === "phoning"){
                  $phoning = "'Phoning with Landis'";
                  $arr[]="'Phoning with Landis'";
              }
              else if($check === "host"){
                  $host = "'Hosting a House Party'";
                  $arr[]= "'Hosting a House Party'";
              }
              else if($check === "lawn"){
                  $lawn = "'Lawn Sign'";
                  $arr[]= "'Lawn Sign'";
              }
              else if ($check === "list"){
                  $list = "'Join the Email List'";
                  $arr[]= "'Join the Email List'";
              }
              else if ($check === "becoming"){
                  $becoming = "'Becoming a Part of the Campaign Team'";
                  $arr[]= "'Becoming a Part of the Campaign Team'";
              }
          }
          function getSelected($arr){
              return join(', ', $arr);
          }
          $volunteer = getSelected($arr);
      }
      //php mailer variables
      $to = get_option('admin_email');
      $subject = "Someone joined the campaign!";
      $headers = 
          'Name: '. $name . "\r\n" .
          'Email: ' . $email . "\r\n" .
          'Phone Number: ' . $phone . "\r\n" .
          'Volunteer: ' .  $volunteer . "\r\n";

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
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 text-center title-text white-text" style="padding-left: 0px;padding-right: 0px;margin-top: -10px;">
            <img src="<?php echo $data_banner['block1_img']?>" style="width: 100%;">
        </div>
    </div>
</div>
<div class="container-fluid" style="background: #02429E;">
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
                <label for="">I'm Interested In:</label><br>
                <div class="col-xs-12" style="padding:0;">
                    <div class="col-xs-12 col-sm-6">
                        <input type="checkbox" name="checklist[]" value="walking">&nbsp;Walking with Landis <br>
                        <input type="checkbox" name="checklist[]" value="phoning">&nbsp;Phoning with Landis <br>
                        <input type="checkbox" name="checklist[]" value="host">&nbsp;Hosting a House Party
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="checkbox" name="checklist[]" value="lawn">&nbsp;Lawn Sign <br>
                        <input type="checkbox" name="checklist[]" value="list">&nbsp;Join the Email List <br>
                        <input type="checkbox" name="checklist[]" value="becoming">&nbsp;Become a Part of the Campaign Team!
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