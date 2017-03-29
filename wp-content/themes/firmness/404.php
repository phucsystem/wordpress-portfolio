<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Firmness
 */
get_header(); 
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' ); ?>
	<div id="main" class="<?php echo esc_attr($firmness_theme_options['layout_settings']);?>">
		<div id="content-box">
			<div id="post-body">
				<h1><?php _e('Error 404 - Page not found!', 'firmness'); ?></h1>
				<div class="sorry"><?php _e('Sorry! It seems that the page you are looking for is not here.', 'firmness'); ?></div>
			</div><!--post-body-->
		</div><!--content-box-->
		<div class="sidebar-frame">
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div><!--sidebar-->
		</div><!--sidebar-frame-->
	</div><!--main-->
<?php get_footer(); ?>