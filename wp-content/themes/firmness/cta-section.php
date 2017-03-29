<?php
/**
 * @package Firmness
 */
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' ); ?>
<div class="cta">
	<div id="cta-wrap">
		<div>
			<h4 class="wow bounceInRight" data-wow-delay="0.1s"><?php echo esc_attr($firmness_theme_options['cta_section_sm_header']); ?> </h4>
			<h2 class="boxtitle wow bounceInLeft" data-wow-delay="0.1s"><?php echo esc_attr($firmness_theme_options['cta_section_big_header']); ?></h2>
			<a class="content-btn" href="<?php echo esc_url($firmness_theme_options['cta_button_url']); ?>"><?php echo esc_attr($firmness_theme_options['cta_button_text']); ?></a>
		</div>
	</div>
</div>