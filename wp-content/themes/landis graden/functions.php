<?php
global $lg_visitor;
// function gtcdc_resources(){
// 	wp_enqueue_style('style', get_stylesheet_uri());
// }

// add_action('wp_enqueue_scripts', 'gtcdc_resources');

// Navigation Menus

register_nav_menus(array(
	'primary' => __('Primary Menu', 'graden'),
	'footer' => __('Footer Menu', 'graden'),
));

// Register Custom Navigation Walker
require_once('navwalker.php');

// Adds post thumbnail functionality

add_theme_support('post-thumbnails'); 

// Custom wp-admin login screen
 
function gtcdc_login_logo()
{
    echo '<style  type="text/css"> html, body {background-color:#27AAE1;}.login #backtoblog a, .login #nav a {color:#fff;}</style>';
}
add_action('login_head',  'gtcdc_login_logo');
	 
// Admin footer modification and removal of dashboard widgets
 
function clean_dashboard () 
{
    echo '<span id="footer-thankyou">Developed by <a href="http://www.laurenmichelledesign.com" style="color:#D0DE47;" target="_blank">Lauren Michelle Design</a></span>';
    echo '<style type="text/css">.count{color: #D0DE47;}.wrap>h1{color:#fff;}#footer-upgrade{display:none;}#dashboard_right_now{display:none;}#published-posts{display:none;}#dashboard_primary{display:none;}#dashboard_activity{display:none;}.update-nag{display:none;}</style>';

}

add_filter('admin_footer_text', 'clean_dashboard');


// Adds Ability to query url for variables
//function redirect_on_submit() {
//    
//    // check if the post is set
//    if (isset($_POST['join-submit']) && ! empty($_POST['message_email'])) 
//        
//    {   
//        
//        $lg_email= $_POST['message_email'];
//        add_query_arg( 'email', $lg_email, site_url( '/join/') );
//        echo $lg_email;
//        return $lg_email;
//        
//    }
//}
//add_action('init', 'redirect_on_submit');

