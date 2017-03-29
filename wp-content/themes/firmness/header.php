<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Firmness
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="grid-container">
	<div class="clear"></div>
		<div id="header-holder">
			<div id="topnav-wrap">
				<div id="topnav">
					<?php $firmness_theme_options = firmness_get_options( 'firmness_theme_options' ); ?>
					<?php if ( $firmness_theme_options['header_social_enable'] == '1' ) { get_template_part( 'social','header' ); }; ?>
					<?php get_template_part( 'search','header' ); ?>
				</div>
			</div>
			<?php if (get_header_image()!='') { ?>
				<div id ="header-wrap" style="background: url(<?php echo esc_url(header_image()); ?>) 50% 0 no-repeat fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
			<?php } else { ?>
				<div id ="header-wrap">
			<?php } ?>
				<div id="logo-layout">	
					<div class="clear"></div>	
					<div id="logo">
						<?php if (function_exists( 'has_custom_logo' ) && has_custom_logo()) {
							firmness_the_custom_logo();
						} else { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ) ?>"><?php esc_attr(bloginfo( 'name' )); ?></a>
						<?php }?>
					</div><!--logo-->
					 				
				<?php if ( $firmness_theme_options['header_address_enable'] == '1' ) { get_template_part( 'address','bar' ); }; ?>  
				
				<?php if(class_exists('Woocommerce')) { 
				      
					  if ( $firmness_theme_options['shopping_cart_enable'] == '1' ) { get_template_part( 'shopping','cart' ); };
				 } ?>
				
					<div id="site-description">
						<?php if ($firmness_theme_options['enable_logo_tagline'] == '1' ) { ?> 
							<h5 class="site-description"><?php echo bloginfo('description'); ?></h5>
						<?php } ?>
					</div>
					
				</div><!--logo-layout-->
			
				<nav class="navbar navbar-default">
        			<div class="navbar-header">
            			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              			<span class="sr-only"><?php _e('Toggle navigation','firmness');?></span>
              			<span class="icon-bar"></span>
              			<span class="icon-bar"></span>
              			<span class="icon-bar"></span>
            			</button>
          			</div><!--navbar-header-->
          			<div id="navbar" class="navbar-collapse collapse">
					<?php 
					if (has_nav_menu('main_navigation')) {
						
						$firmness_default_menu = array(
    						'theme_location'  => 'main_navigation',
							'menu'       => 'main_navigation',
    						'depth'      => 0,
    						'container'  => false,
    						'menu_class' => 'nav navbar-nav',
                			'fallback_cb'       => 'wp_page_menu',
    						'walker'     => new wp_bootstrap_navwalker(),
						);
					
					} else {
						
						$firmness_default_menu = array(
    						'theme_location'  => 'main_navigation',
							'menu'       => 'main_navigation',
    						'depth'      => 0,
    						'container'  => false,
    						'menu_class' => 'nav-bar',
                			'fallback_cb'       => 'wp_page_menu',
						);
						
					} 
					
					wp_nav_menu( $firmness_default_menu );
					
					?>
					
          			</div><!--/.nav-collapse -->
				</nav><!--site-navigation-->
				
			</div><!--header-wrap-->
		</div><!--header-holder-->