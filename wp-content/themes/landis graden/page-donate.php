<?php get_header(); 

/**
 * Custom Form Fields
 * 
 * @param $form_id
 */
function give_myprefix_custom_form_fields( $form_id ) {

	
		?>
		<div id="give-referral-wrap">
			<label class="give-label" for="give-referral"><?php _e( 'How did you hear about GDI?:', 'give' ); ?></label>
			<span class="give-tooltip icon icon-question" data-tooltip="<?php _e( 'Please take a second to tell us how you first heard about Girl Develop It.', 'give' ) ?>"></span>
			<textarea class="give-textarea" name="give_referral" id="give-referral"></textarea>
		</div>
	<?php

}


?>

    <!-- Container 1 -->
    <div class="container-fluid" style="background: #02429E;">
    	<div class="row" style="margin-top: 50px; margin-bottom: 50px;">
    		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
    			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    				?>
    				<?php echo the_content();?>
    				<?php endwhile;

    					else :
    						
    					endif;
    				?>
    		</div>
    	</div>
    </div>
	
<?php 
add_action( 'give_after_donation_levels', 'give_myprefix_custom_form_fields', 10, 1 );
get_footer(); 

?>
