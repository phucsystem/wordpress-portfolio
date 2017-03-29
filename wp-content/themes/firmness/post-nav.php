<?php
/**
 *
 * @package Firmness
 */
if ( is_single() ): ?>
	<ul class="link-pages">
		<li class="next-link"><?php esc_url(next_post_link('%link', '<i class="fa fa-chevron-right"></i><strong>'.__('Next', 'firmness').'</strong> <span>%title</span>')); ?></li>
		<li class="previous-link"><?php esc_url(previous_post_link('%link', '<i class="fa fa-chevron-left"></i><strong>'.__('Previous', 'firmness').'</strong> <span>%title</span>')); ?></li>
	</ul>
<?php 
endif;