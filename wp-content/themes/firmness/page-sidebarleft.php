<?php
/*
Template Name: Page With Left Sidebar
*
* @package Firmness
 */
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
get_header(); ?>
	<div id="main" class="col2-r">
	<?php if ($firmness_theme_options['enable_breadcrumbs'] == '1') { ?>
		<?php if (!is_front_page()) { ?>
			<div class="breadcrumbs">
				<div class="breadcrumbs-wrap"> 
					<?php get_template_part( 'breadcrumbs'); ?>
				</div><!--breadcrumbs-wrap-->
			</div><!--breadcrumbs-->
		<?php }
		} ?>
	<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="content-box">
				<div id="post-body">
					<div <?php post_class('post-single'); ?>>
						<h1 id="post-title" <?php post_class('entry-title'); ?>><?php the_title(); ?> </h1>
						<?php if ( has_post_thumbnail() ) { ?>
							<div class="thumb-wrapper">
								<?php the_post_thumbnail('full'); ?>
							</div><!--thumb-wrapper-->
						<?php } ?>
						<div id="article">
							<?php the_content(); 
							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'firmness' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) );
							
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template( '', true );
							} ?>
							
						</div><!--article-->
					</div><!--post-single-->
				</div><!--post-body-->
			</div><!--content-box-->
				<div class="sidebar-frame">
					<div class="sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
		<?php endwhile; ?>
	</div><!--main-->
<?php get_footer(); ?>