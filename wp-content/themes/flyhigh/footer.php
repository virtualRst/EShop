<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flyhigh
 */

?>

	<footer>
		<div id="inner">
		<div id="description">
			<p id="head"><?php echo get_theme_mod('cf_footer_ltitle'); ?></p>
			<p id="desc"><?php echo get_theme_mod('cf_footer_ldesc'); ?></p>
			<a href="#">Read More</p></a>
		</div>
		<div id="contactus">
			<p id="head"><?php echo get_theme_mod('cf_footer_rtitle'); ?></p>
			<p id="desc"><?php echo get_theme_mod('cf_footer_rdesc'); ?><br/> Email: <span><?php echo get_theme_mod('cf_footer_email'); ?></span></p>
		<div id="links">
			<a href="<?php echo get_theme_mod('cf_footer_social_fb') ?>"><img class="fb" src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/fb.png',"flyhigh") ?>" /></a>
			<a href="<?php echo get_theme_mod('cf_footer_social_google') ?>"><img class="google" src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/google.png',"flyhigh") ?>" /></a>
			<a href="<?php echo get_theme_mod('cf_footer_social_linkedin') ?>"><img class="linkedin" src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/twitter.png',"flyhigh") ?>" /></a>
			<a href="<?php echo get_theme_mod('cf_footer_social_pinterest') ?>"><img class="pinterest" src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/pinterest.png',"flyhigh") ?>" /></a>
			<a href="<?php echo get_theme_mod('cf_footer_social_twitter') ?>"><img class="twitter" src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/linkedin.png',"flyhigh") ?>" /></a>
		</div>
		</div>
		</div>
			<div id="copyright">
				2012 - D'SIGNfly | Designed by <span>rtCamp</span> 
			</div>
	</footer>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
