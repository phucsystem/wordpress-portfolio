<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Firmness
 */
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
get_header(); ?>
	<div id="main" class="<?php echo esc_attr($firmness_theme_options['layout_settings']);?>">
	<?php if ($firmness_theme_options['enable_breadcrumbs'] == '1') { ?>
		<?php if (!is_front_page()) { ?>
			<div class="breadcrumbs">
				<div class="breadcrumbs-wrap"> 
					<?php get_template_part( 'breadcrumbs'); ?>
				</div><!--breadcrumbs-wrap-->
			</div><!--breadcrumbs-->
		<?php }
		} ?>
	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'single');
		
		endwhile;
	?>
	</div><!--main-->
<?php get_footer(); ?>