<?php
/**
 * @package Firmness
 */
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
$blog_cat = $firmness_theme_options['blog_cat'];
$num_posts = $firmness_theme_options['num_posts'];

wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ),'', false);
$fromblog_query = new WP_Query(
	array(
		'posts_per_page' => $num_posts,
		'cat' 	=> $blog_cat
	)
);?>

<div class="from-blog">
	<div id="from-blog-wrap">
		<div>
		<h2 class="boxtitle wow bounceInLeft" data-wow-delay="0.1s"><?php echo esc_attr($firmness_theme_options['blog_section_title']); ?></h2>
			<div id="owl-wrap" class="owl-carousel">
			<?php while ( $fromblog_query->have_posts() ): $fromblog_query->the_post(); ?>
				<div <?php post_class('item'); ?>>
					<div class="owl-image imgLiquidFill imgLiquid">
						<?php if ( has_post_thumbnail() ) { ?>
							<a href="<?php esc_url(the_permalink()); ?>"><?php the_post_thumbnail('full'); ?></a>
						<?php } else { ?>
							<img class="attachment-full wp-post-image rs-slide-image" width="1024" height="500" alt="slide" src="<?php echo esc_url(get_template_directory_uri().'/images/assets/slide.jpg');?>">
						<?php } ?>
					</div>
					<?php get_template_part('owlpost','info'); ?>
					<a class="post-title" href="<?php esc_url(the_permalink()); ?>"><h3><?php esc_attr(the_title()); ?></h3></a>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>
<?php wp_enqueue_script( 'firmness-fromblog', get_template_directory_uri() .'/js/fromblog.js' , array( 'jquery' ), '', true ); ?>
