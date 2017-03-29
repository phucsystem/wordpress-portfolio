<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Firmness
 */
get_header(); 
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' ); ?>
	<div id="main" class="<?php echo esc_attr($firmness_theme_options['layout_settings']); ?>">
	<?php 
		if (is_front_page() && ! is_paged()) {
		
			if ($firmness_theme_options['image_slider_on'] == '1') {
				
				firmness_flex_slider(); 
				
			}

			if ($firmness_theme_options['features_section_on'] == '1') {
			
				get_template_part( 'features', 'section' );
				
			}
			
			if ($firmness_theme_options['about_section_on'] == '1') {
			
				firmness_about_section();
				
			}
			
			if ($firmness_theme_options['services_section_on'] == '1') {
			
				get_template_part( 'services', 'section' );
				
			}
			
			if ($firmness_theme_options['cta_section_on'] == '1') {
			
				get_template_part( 'cta', 'section' );
				
			}
			
			if ($firmness_theme_options['content_boxes_section_on'] == '1') {
			
				firmness_content_boxes();
				
			}
			
			if ($firmness_theme_options['blog_section_on'] == '1') {
			
				get_template_part( 'fromblog', 'section' );
				
			}

			
			if ($firmness_theme_options['latest_posts_on'] == '1') {
			
				get_template_part( 'content', 'posts' );
				
			}		
		
		} else {
		
			get_template_part( 'content', 'posts' );
		
		} ?>	
	</div><!--main-->
<?php get_footer(); ?>