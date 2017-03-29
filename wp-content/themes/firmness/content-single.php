<?php 
/**
 * @package Firmness
 */
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
?>
<div id="content-box">
	<div id="post-body">
		<div <?php post_class('post-single'); ?>>
			<h1 id="post-title" <?php post_class('entry-title'); ?>><?php the_title(); ?> </h1>
			<?php if ($firmness_theme_options['post_info'] == 'above') { get_template_part('post','info');}
			if (has_post_format( 'gallery' )) {
				firmness_gallery_post();
			} else { 
				if ( has_post_thumbnail() ) { 
					if (has_post_format( 'video' )) {
					} else { 
						if ($firmness_theme_options['featured_img_post'] == '1') {?>
							<div class="thumb-wrapper">
								<?php the_post_thumbnail('full'); ?>
							</div><!--thumb-wrapper-->
							<?php
						} 
					}
				} 			
			} ?>
			<div id="article">
				<?php the_content(); 
				the_tags('<p class="post-tags"><span>'.__('Tags:','firmness').'</span> ','','</p>');
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'firmness' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
				
				//Displays navigation to next/previous post.
				if ( $firmness_theme_options['post_navigation'] == 'below') { get_template_part('post','nav'); }
				
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template( '', true );
				} ?>
			
			</div><!--article-->
		</div><!--post-single-->
			<?php get_template_part('post','sidebar'); ?>
	</div><!--post-body-->
</div><!--content-box-->
<div class="sidebar-frame">
	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div><!--sidebar-->
</div><!--sidebar-frame-->