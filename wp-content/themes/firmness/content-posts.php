<?php 
/**
 * @package Firmness
 *
 */
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
if ( have_posts() ) : ?>
	<div class="clear"></div>
	<?php if ($firmness_theme_options['enable_breadcrumbs'] == '1') { ?>
		<?php if (!is_front_page()) { ?>
			<div class="breadcrumbs">
				<div class="breadcrumbs-wrap"> 
					<?php get_template_part( 'breadcrumbs'); ?>
				</div><!--breadcrumbs-wrap-->
			</div><!--breadcrumbs-->
		<?php }
		} ?>
	<div class="standard-posts-wrapper">
		<div class="posts-wrapper">	
			<div id="post-body">
				<div class="post-single">
				 <?php // Start the Loop.
				while ( have_posts() ) : the_post();					
					get_template_part('content');		
				endwhile; 		
				if ($firmness_theme_options['simple_paginaton'] == '1') {			
					// Displays links for next and previous pages. ?>
					<div class="clear"></div>
					<div class="simple-pagination">
						<?php posts_nav_link();	?>
					</div> <?php
				} else {		
					// Previous/next post navigation. ?>
					<div class="clear"></div> <?php 
					firmness_paging_nav();		
				} ?>
				</div>
			</div><!--posts-body-->
		</div><!--posts-wrapper-->
	</div><!--standard-posts-wrapper-->
	<div class="sidebar-frame">
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php 
else: ?>
	<?php get_template_part( 'content', 'none' );
endif; ?>