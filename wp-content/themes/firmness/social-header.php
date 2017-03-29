<?php
/**
 * @package Firmness
 */
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
?>			
<div id="social-bar">
	<ul>
		<?php if($firmness_theme_options['facebook_link']): ?>
		<li>
			<a href="<?php echo esc_url($firmness_theme_options['facebook_link']); ?>" target="_blank" title="<?php _e('Facebook','firmness'); ?>"><i class="fa fa-facebook"></i></a>
		</li>
		<?php endif; ?>
		<?php if($firmness_theme_options['flickr_link']): ?>
		<li>
			<a href="<?php echo esc_url($firmness_theme_options['flickr_link']); ?>" target="_blank" title="<?php _e('Flickr','firmness'); ?>"><i class="fa fa-flickr"></i></a>
		</li>
		<?php endif; ?>
		<?php if($firmness_theme_options['rss_link']): ?>
		<li>
			<a href="<?php echo esc_url($firmness_theme_options['rss_link']); ?>" target="_blank" title="<?php _e('RSS','firmness'); ?>"><i class="fa fa-rss"></i></a>
		</li>
		<?php endif; ?>
		<?php if($firmness_theme_options['twitter_link']): ?>
		<li>
			<a href="<?php echo esc_url($firmness_theme_options['twitter_link']); ?>" target="_blank" title="<?php _e('Twitter','firmness'); ?>"><i class="fa fa-twitter"></i></a>
		</li>
		<?php endif; ?>
		<?php if($firmness_theme_options['youtube_link']): ?>
		<li>
			<a href="<?php echo esc_url($firmness_theme_options['youtube_link']); ?>" target="_blank" title="<?php _e('YouTube','firmness'); ?>"><i class="fa fa-youtube"></i></a>
		</li>
		<?php endif; ?>
		<?php if($firmness_theme_options['pinterest_link']): ?>
		<li>
			<a href="<?php echo esc_url($firmness_theme_options['pinterest_link']); ?>" target="_blank" title="<?php _e('Pinterest','firmness'); ?>"><i class="fa fa-pinterest"></i></a>
		</li>
		<?php endif; ?>
		<?php if($firmness_theme_options['tumblr_link']): ?>
		<li>
			<a href="<?php echo esc_url($firmness_theme_options['tumblr_link']); ?>" target="_blank" title="<?php _e('Tumblr','firmness'); ?>"><i class="fa fa-tumblr"></i></a>
		</li>
		<?php endif; ?>
		<?php if($firmness_theme_options['google_link']): ?>
		<li>
			<a href="<?php echo esc_url($firmness_theme_options['google_link']); ?>" target="_blank" title="<?php _e('Google+','firmness'); ?>"><i class="fa fa-google-plus"></i></a>
		</li>
		<?php endif; ?>
		<?php if($firmness_theme_options['dribbble_link']): ?>
		<li>
			<a href="<?php echo esc_url($firmness_theme_options['dribbble_link']); ?>" target="_blank" title="<?php _e('Dribbble','firmness'); ?>"><i class="fa fa-dribbble"></i></a>
		</li>
		<?php endif; ?>
		<?php if($firmness_theme_options['linkedin_link']): ?>
		<li>
			<a href="<?php echo esc_url($firmness_theme_options['linkedin_link']); ?>" target="_blank" title="<?php _e('LinkedIn','firmness'); ?>"><i class="fa fa-linkedin"></i></a>
		</li>
		<?php endif; ?>
		<?php if($firmness_theme_options['instagram_link']): ?>
		<li>
			<a href="<?php echo esc_url($firmness_theme_options['instagram_link']); ?>" target="_blank" title="<?php _e('Instagram','firmness'); ?>"><i class="fa fa-instagram"></i></a>
		</li>
		<?php endif; ?>
	</ul>
</div><!--social-bar-->