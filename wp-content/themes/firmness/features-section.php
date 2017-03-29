<?php
/**
 * @package Firmness
 */
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
?>	
<div id="features">
	<h2 class="section-title wow bounceInLeft" data-wow-delay="0.1s"><?php echo esc_attr($firmness_theme_options['features_section_title']); ?></h2>
	<h4 class="sub-title wow bounceInRight" data-wow-delay="0.2s"><?php echo esc_attr($firmness_theme_options['features_section_desc']); ?></h4>
	<div class="feature wow bounceIn" data-wow-delay="0.2s">
		<h3><?php echo esc_attr($firmness_theme_options['feature_one']); ?></h3>
		<p><?php echo esc_attr($firmness_theme_options['feature_one_desc']); ?></p>
		<?php if ($firmness_theme_options['feature_one_url'] !='') { ?>
			<a href="<?php echo esc_url($firmness_theme_options['feature_one_url']); ?>">
				<div class="circle">
					<i class="fa <?php echo esc_attr($firmness_theme_options['feature_one_icon']); ?>"></i>
				</div><!--circle-->
			</a>
		<?php } else { ?>
			<div class="circle">
				<i class="fa <?php echo esc_attr($firmness_theme_options['feature_one_icon']); ?>"></i>
			</div><!--circle-->			
		<?php } ?>	

	</div><!--feature-->
	<div class="feature wow bounceIn" data-wow-delay="0.5s">
		<h3><?php echo esc_attr($firmness_theme_options['feature_two']); ?></h3>
		<p><?php echo esc_attr($firmness_theme_options['feature_two_desc']); ?></p>
		<?php if ($firmness_theme_options['feature_two_url'] !='') { ?>
			<a href="<?php echo esc_url($firmness_theme_options['feature_two_url']); ?>">
				<div class="circle">
					<i class="fa <?php echo esc_attr($firmness_theme_options['feature_two_icon']); ?>"></i>
				</div><!--circle-->
			</a>
		<?php } else { ?>
			<div class="circle">
				<i class="fa <?php echo esc_attr($firmness_theme_options['feature_two_icon']); ?>"></i>
			</div><!--circle-->			
		<?php } ?>	
	</div><!--feature-->
	<div class="feature wow bounceIn" data-wow-delay="0.8s">
		<h3><?php echo esc_attr($firmness_theme_options['feature_three']); ?></h3>
		<p><?php echo esc_attr($firmness_theme_options['feature_three_desc']); ?></p>
		<?php if ($firmness_theme_options['feature_three_url'] !='') { ?>
			<a href="<?php echo esc_url($firmness_theme_options['feature_three_url']); ?>">
				<div class="circle">
					<i class="fa <?php echo esc_attr($firmness_theme_options['feature_three_icon']); ?>"></i>
				</div><!--circle-->
			</a>
		<?php } else { ?>
			<div class="circle">
				<i class="fa <?php echo esc_attr($firmness_theme_options['feature_three_icon']); ?>"></i>
			</div><!--circle-->			
		<?php } ?>	
	</div><!--feature-->
	<div class="feature wow bounceIn" data-wow-delay="1.1s">
		<h3><?php echo esc_attr($firmness_theme_options['feature_four']); ?></h3>
		<p><?php echo esc_attr($firmness_theme_options['feature_four_desc']); ?></p>
		<?php if ($firmness_theme_options['feature_four_url'] !='') { ?>
			<a href="<?php echo esc_url($firmness_theme_options['feature_four_url']); ?>">
				<div class="circle">
					<i class="fa <?php echo esc_attr($firmness_theme_options['feature_four_icon']); ?>"></i>
				</div><!--circle-->
			</a>
		<?php } else { ?>
			<div class="circle">
				<i class="fa <?php echo esc_attr($firmness_theme_options['feature_four_icon']); ?>"></i>
			</div><!--circle-->			
		<?php } ?>	
	</div><!--feature-->
</div><!--features-->