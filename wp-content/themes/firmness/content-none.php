<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package Firmness
 */
get_header(); 
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' ); ?>
	<div id="main" class="<?php echo esc_attr($firmness_theme_options['layout_settings']);?>">
		<div id="content-box">
			<div id="post-body">
				<h1><?php _e('Nothing Found!', 'firmness'); ?></h1>
				<div class="sorry"><?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'firmness'); ?></div>
				<br>
				<br>
			</div><!--post-body-->
		</div><!--content-box-->
		<div class="sidebar-frame">
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div><!--sidebar-->
		</div><!--sidebar-frame-->
	</div><!--main-->
<?php get_footer(); ?>