<?php
/**
 * @package Firmness
 */  
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
?>
<div id="copyright">
	<div class="copyright-wrap">
		<span class="left"><a href="<?php echo esc_url( home_url( '/' ) ) ?>"><?php echo esc_attr($firmness_theme_options['footer_copyright_text']);?></a></span>
		<span class="right"><a title="<?php _e('Firmness Theme','firmness'); ?>" target="_blank" href="<?php echo esc_url( __('http://vpthemes.com/firmness/','firmness') );?>"><?php _e('Firmness Theme','firmness'); ?></a><?php _e(' powered by ','firmness'); ?><a title="<?php _e('WordPress','firmness'); ?>" href="<?php echo esc_url( __( 'https://wordpress.org/', 'firmness' ) ); ?>"><?php _e('WordPress','firmness'); ?></a></span>
	</div>
</div><!--copyright-->