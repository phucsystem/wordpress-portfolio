<?php
/**
 * Firmness functions and definitions
 *
 * @package Firmness
 * 
 */

/**
 * Loads theme setup functions.
 */
function firmness_setup() {
	/**
 	* Sets up the content width.
 	*/
	global $content_width;
	if ( ! isset( $content_width ) ) { $content_width = 1200; }
	
	/** 
	 * Makes theme available for translation
	 * 
	 */
	load_theme_textdomain( 'firmness', get_template_directory() . '/languages' );

	/** 
	 * This theme styles the visual editor with editor-style.css to match the theme style.
	 */
	add_editor_style();

	/** 
	 * Default RSS feed links
	 */
	add_theme_support('automatic-feed-links');

	/**
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/**
 	* Register Navigation
 	*/
	register_nav_menu('main_navigation', __('Primary Menu', 'firmness') );

	/** 
 	* Support a variety of post formats.
 	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'audio', 'gallery' ) );

	/** 
 	* Custom image size for featured images, displayed on "standard" posts.
 	*/
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 2500, 9999 ); // Unlimited height, soft crop
		
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/**
 	* Sets up theme custom backgrounds
	 * 
	 */

	add_theme_support( 'custom-background', apply_filters( 'firmness_custom_background_args', array(
			'default-color'          => 'dddddd',
			'default-image'          =>  get_template_directory_uri() . '/images/assets/default-bg.jpg'
	) ) );

	/**
	* Sets up theme custom header image.
	*/
	add_theme_support( 'custom-header', apply_filters( 'firmness_custom_header_args', array(
		'width'                  => 1200,
		'height'                 => 200,
		'flex-height'            => true,
		'header-text'            => false,
	) ) );
	
	/*
	* Enable support for custom logo.
	*/
	add_image_size( 'firmness-logo', 300, 80 );
	add_theme_support( 'custom-logo', array( 'size' => 'firmness-logo' ) );
	
	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );

}

add_action( 'after_setup_theme', 'firmness_setup' );

/** 
 * Add scripts function
 * 
 */

function firmness_add_script_function() {
	$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
	/** 
	* Enqueue css
	*/
	wp_enqueue_style ('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('firmness',  get_stylesheet_uri());
	if ($firmness_theme_options['responsive_design'] == '1'):
		wp_enqueue_style ('firmness-responsive', get_template_directory_uri() . '/css/responsive.css');
	endif;
	wp_enqueue_style ('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
	wp_enqueue_style ('animate', get_template_directory_uri() . '/css/animate.css');
	if( $firmness_theme_options['google_font_body'] !=""):
		wp_enqueue_style ('firmness-body-font', '//fonts.googleapis.com/css?family='. urlencode($firmness_theme_options['google_font_body']) .':400,400italic,700,700italic&subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese');
	endif;
	if( $firmness_theme_options['google_font_menu'] != ""):
		wp_enqueue_style ('firmness-menu-font', '//fonts.googleapis.com/css?family='. urlencode($firmness_theme_options['google_font_menu']) .':400,400italic,700,700italic&subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese');
	endif;
	if( $firmness_theme_options['google_font_logo'] != ""):
		wp_enqueue_style ('firmness-logo-font', '//fonts.googleapis.com/css?family='. urlencode($firmness_theme_options['google_font_logo']) .':400,400italic,700,700italic&subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese');
	endif;

	/** 
	 * Enqueue javascripts
	 */
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ),'', false);
	wp_enqueue_script( 'jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array( 'jquery' ),'', false );
	wp_enqueue_script('firmness-custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ),'', true);
	wp_enqueue_script('jquery-smartmenus', get_template_directory_uri() . '/js/jquery.smartmenus.js', array( 'jquery' ),'', false);
	wp_enqueue_script('jquery-smartmenus-bootstrap', get_template_directory_uri() . '/js/jquery.smartmenus.bootstrap.js', array( 'jquery' ),'', false);
	wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ),'', false);
	wp_enqueue_script('imgLiquid', get_template_directory_uri() . '/js/imgLiquid.js', array( 'jquery' ),'', false);
	wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js', array(),'', false);
	if ( $firmness_theme_options['scrollup'] == 1) { 
		wp_enqueue_script('firmness-scrollup', get_template_directory_uri() . '/js/scrollup.js', array( 'jquery' ),'', true); 
	}
	if ( $firmness_theme_options['animation'] == 1) { 
		wp_enqueue_script('animation', get_template_directory_uri() . '/js/animation.js', array(),'', true); 
	}
	wp_enqueue_script( 'firmness-html5', get_template_directory_uri() . '/js/html5.js', array(), '' );
	wp_script_add_data( 'firmness-html5', 'conditional', 'lt IE 9' );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action('wp_enqueue_scripts','firmness_add_script_function');

/** 
 * Register widgetized locations
 */
function firmness_widgets_init() {
	register_sidebar(array(
		'name' => __( 'Main Sidebar', 'firmness' ),
		'id' => 'main-sidebar',
		'before_widget' => '<div id="%1$s" class="widget wow fadeIn %2$s" data-wow-delay="0.5s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title clearfix"><h4><span>',
		'after_title' => '</span></h4></div>',
	));

	register_sidebar(array(
		'name' =>  __( 'Footer Widget 1', 'firmness' ),
		'id' => 'footer-widget-1',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'name' => __( 'Footer Widget 2', 'firmness' ),
		'id' => 'footer-widget-2',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'name' => __( 'Footer Widget 3', 'firmness' ),
		'id' => 'footer-widget-3',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'name' => __( 'Footer Widget 4', 'firmness' ),
		'id' => 'footer-widget-4',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
}

add_action( 'widgets_init', 'firmness_widgets_init' );

/** 
 * Displays navigation to next/previous pages
 */
function firmness_paging_nav(){
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&larr; Previous', 'firmness' ),
		'next_text' => __( 'Next &rarr;', 'firmness' ),
	) );

	if ( $links ) :

	?>
	<div class="pagination">
		<?php echo $links; ?>
	</div><!--pagination-->
	<?php
	endif;
}

/**
 * Function to change excerpt more string
 */
function firmness_custom_excerpt_more( $more ) {
	return '...';
}

add_filter( 'excerpt_more', 'firmness_custom_excerpt_more' );

/** 
 * Load function to change excerpt length
 * 
 */
function firmness_excerpt_length( $length ) {
	$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );	
	if($firmness_theme_options['blog_excerpt'] !="") {
		$excrpt = $firmness_theme_options['blog_excerpt'];
		return $excrpt;
	} else {
		$excrpt = '50';
		return $excrpt;
	}
}
add_filter('excerpt_length', 'firmness_excerpt_length', 999);

/** 
 * Function to add ScrollUp to the footer.
*/
function firmness_add_scrollup() { 
	$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
	if ( $firmness_theme_options['scrollup'] == 1) { 
		echo '<a href="#" class="back-to-top"><i class="fa fa-arrow-circle-up"></i></a>'."\n";
	}
}

add_action('wp_footer', 'firmness_add_scrollup');

/**
 * Load Tagline function	
*/
function firmness_about_section() { 
	$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );?>
	<div class="about">
		<div>
			<h2 class="boxtitle wow bounceInLeft" data-wow-delay="0.1s"><?php echo esc_attr($firmness_theme_options['about_section_header']); ?></h2>
			<p class="text wow bounceInRight" data-wow-delay="0.2s"><?php echo esc_attr($firmness_theme_options['about_section_text']); ?> </p>
		</div>
	</div>
<?php }

/** 
 * Function to display "Content Boxes Section" on home page.
*/
function firmness_content_boxes() { 
	$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );?>
	<div class="content-boxes">
		<div class="col wow bounceIn" data-wow-delay="0.2s">
			<div class="circle">
				<i class="fa <?php echo esc_attr($firmness_theme_options['first_column_image']); ?>"></i>
			</div>
			<h4><?php echo esc_attr($firmness_theme_options['first_column_header']); ?></h4>
			<p><?php echo esc_attr($firmness_theme_options['first_column_text']); ?></p>
			<a class="content-btn" href="<?php echo esc_url($firmness_theme_options['first_column_url']); ?>"><?php _e('Read More','firmness'); ?></a>
		</div>
		<div class="col wow bounceIn" data-wow-delay="0.5s">
			<div class="circle">	
				<i class="fa <?php echo esc_attr($firmness_theme_options['second_column_image']); ?>"></i>
			</div>
			<h4><?php echo esc_attr($firmness_theme_options['second_column_header']); ?></h4>
			<p><?php echo esc_attr($firmness_theme_options['second_column_text']); ?></p>
			<a class="content-btn" href="<?php echo esc_url($firmness_theme_options['second_column_url']); ?>"><?php _e('Read More','firmness'); ?></a>
		</div>
		<div class="col wow bounceIn" data-wow-delay="0.8s"">
			<div class="circle">	
				<i class="fa <?php echo esc_attr($firmness_theme_options['third_column_image']); ?>"></i>
			</div>
			<h4><?php echo esc_attr($firmness_theme_options['third_column_header']); ?></h4>
			<p><?php echo esc_attr($firmness_theme_options['third_column_text']); ?></p>
			<a class="content-btn" href="<?php echo esc_url($firmness_theme_options['third_column_url']); ?>"><?php _e('Read More','firmness'); ?></a>
		</div>
	</div>
<?php }

/** 
 * Function to display image slider in gallery post formats.
*/
function firmness_gallery_post() { 
	global $post;
	?>
	<div class="flexslider">
		<ul class="slides">	
		<?php
			//Pull gallery images from custom meta
			$gallery_image = get_post_gallery_images( $post );
			if($gallery_image !=  ''){
				foreach ($gallery_image as $arr){
					echo '<li><img src="'.esc_url($arr).'" alt="'.esc_attr($arr).'" /></li>';
				}
			}
		?>		
		</ul>
	</div>	
	<?php wp_enqueue_script('firmness-custom-slides', get_template_directory_uri() . '/js/slides.js', array( 'jquery' ),'', true);
}

/** 
 * Custom search form.
*/
function firmness_search_form( $form ) {
    $form = '<form role="search" method="get" class="searchformhead" action="' . esc_url(home_url( '/' )) . '" >
    		<input type="text" placeholder="Search..." value="' . get_search_query() . '" name="s" id="s" />
    		<button class="searchSubmit">
				<i class="fa fa-search"></i>
			</button>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'firmness_search_form' );

/** 
 * Custom favicon function
 */
function firmness_favicon() {
	$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
	if ($firmness_theme_options['enable_favicon'] == '1' ) {
		echo '<link rel="shortcut icon" href="'.esc_url($firmness_theme_options['favicon']).'"/>'."\n";
	}
}

add_filter( 'wp_head', 'firmness_favicon' );

/** 
 * Function for displaying image attachments.
 * 
 */
function firmness_the_attached_image() {
	$post = get_post();
	$attachment_size = apply_filters( 'firmness_attachment_size', array( 1024, 1024 ) );
	$next_attachment_url = wp_get_attachment_url();
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}

		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
		}
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}

/** 
 * Function for displaying custom logo.
 * 
 */
if ( ! function_exists( 'firmness_the_custom_logo' ) ) :
function firmness_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;