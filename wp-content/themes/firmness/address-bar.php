<?php
/**
 * @package Firmness
 */
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
?>			
<div id="address-bar">
	<div class="address-box">
		<span><?php echo esc_attr($firmness_theme_options['header_address']); ?></span>
	</div>
	<div class="phone-box">
		<span class="top-email"><i class="fa fa-phone"></i><?php echo esc_attr($firmness_theme_options['header_phone']); ?></span>
		<span class="top-email"><i class="fa fa-envelope"></i><a href="mailto:<?php echo esc_attr($firmness_theme_options['header_email']); ?>"><?php echo esc_attr($firmness_theme_options['header_email']); ?></a></span>
	</div>
</div><!---address-bar-->