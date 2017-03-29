<?php
/**
 * Firmness functions and definitions
 *
 * @package Firmness
 */

/**
 * Load Flex slider function	
 *
*/
function firmness_flex_slider() {
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
$slider_cat = $firmness_theme_options['image_slider_cat'];
$num_of_slides = $firmness_theme_options['slider_num'];
$button_text = $firmness_theme_options['caption_button_text'];

$flex_query = new WP_Query(
	array(
		'posts_per_page' => $num_of_slides,
		'cat' 	=> $slider_cat
	)
);?>
<div class="clear"></div>
<div class="flexslider da-slider" >
	<ul class="slides">
	<?php while ( $flex_query->have_posts() ): $flex_query->the_post(); ?>
		<li>
			<?php if ( has_post_thumbnail() ) { ?>
				<?php the_post_thumbnail('full'); ?>
			<?php } else { ?>
				<?php if ($slider_cat !='') { ?>
					<img class="attachment-full wp-post-image rs-slide-image" width="1200" height="450" alt="slide" src="<?php echo esc_url(get_template_directory_uri().'/images/assets/slide.jpg');?>">
				<?php } else { ?>
					<img class="attachment-full wp-post-image rs-slide-image" width="1200" height="450" alt="slide" src="<?php echo esc_url(get_template_directory_uri().'/images/assets/slide1.jpg');?>">
				<?php } ?>
			<?php } ?>
			<?php if ($firmness_theme_options['captions_on'] == '1') { ?>
				<div class="posts-featured-details-wrapper">
					<div>
						<a class="post-title" href="<?php esc_url(the_permalink()); ?>"><h2><?php the_title(); ?></h2></a>
						<?php the_excerpt(); ?><br>
						<?php if ($firmness_theme_options['captions_button'] == '1') { ?>
							<a href="<?php esc_url(the_permalink()); ?>" class="da-link"><?php echo esc_attr($button_text); ?></a>
						<?php }; ?>
					</div>
				</div>
			<?php }; ?>	
			</li>
		<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="clear"></div>

<?php 
}

function firmness_localize_scripts(){
	wp_enqueue_script( 'firmness-slides', get_template_directory_uri() .'/js/slides.js' , array( 'jquery' ), '', true );
	$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
	$animation_speed = $firmness_theme_options['animation_speed'];
	$slideshow_speed = $firmness_theme_options['slideshow_speed'];
		$datatoBePassed = array(
        	'slideshowSpeed' => $slideshow_speed,
        	'animationSpeed' => $animation_speed,
    	);
	wp_localize_script( 'firmness-slides', 'php_vars', $datatoBePassed );
}

add_action( 'wp_enqueue_scripts', 'firmness_localize_scripts' );