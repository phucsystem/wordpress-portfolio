<?php
/**
 * @package Firmness
 */
if(class_exists('Woocommerce')): ?>
	<div id="cart-wrapper">	
		<div id="shopping-cart">	
			<?php global $woocommerce; ?>
			<i class="fa fa-shopping-cart"></i><a class="cart-contents" href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'firmness'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'firmness'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>	
		</div>
		<div id="account-set">
			<?php global $woocommerce; ?>
				<?php if ( is_user_logged_in() ) { ?>
					<a href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id'))); ?>" title="<?php _e('My Account','firmness'); ?>"><?php _e('My Account','firmness'); ?></a>
					<?php }
				else { ?>
					<a href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id'))); ?>" title="<?php _e('Login / Register','firmness'); ?>"><?php _e('Login / Register','firmness'); ?></a>
				<?php } ?>
		</div>
	<div class="clear"></div>
	</div>
<?php endif ;?>