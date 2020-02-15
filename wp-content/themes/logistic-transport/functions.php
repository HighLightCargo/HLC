<?php
/**
 * Logistic Transport functions and definitions
 *
 * @package Logistic Transport
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Theme Setup */
if ( ! function_exists( 'logistic_transport_setup' ) ) :

function logistic_transport_setup() {

	$GLOBALS['content_width'] = apply_filters( 'logistic_transport_content_width', 640 );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('logistic-transport-homepage-thumb',240,145,true);
	
       register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'logistic-transport' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', logistic_transport_font_url() ) );

}
endif;
add_action( 'after_setup_theme', 'logistic_transport_setup' );

/* Theme Widgets Setup */
function logistic_transport_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'logistic-transport' ),
		'description'   => __( 'Appears on blog page sidebar', 'logistic-transport' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'logistic-transport' ),
		'description'   => __( 'Appears on page sidebar', 'logistic-transport' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'logistic-transport' ),
		'description'   => __( 'Appears on page sidebar', 'logistic-transport' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 1', 'logistic-transport' ),
		'description'   => __( 'Appears on footer', 'logistic-transport' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 2', 'logistic-transport' ),
		'description'   => __( 'Appears on footer', 'logistic-transport' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 3', 'logistic-transport' ),
		'description'   => __( 'Appears on footer', 'logistic-transport' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 4', 'logistic-transport' ),
		'description'   => __( 'Appears on footer', 'logistic-transport' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'logistic_transport_widgets_init' );

/* Theme Font URL */
function logistic_transport_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function logistic_transport_scripts() {
	wp_enqueue_style( 'logistic-transport-font', logistic_transport_font_url(), array() );	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'logistic-transport-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'logistic-transport-style', 'rtl', 'replace' );
	wp_enqueue_style( 'logistic-transport-effect', get_template_directory_uri().'/css/effect.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/fontawesome-all.css' );

	// Paragraph
	    $logistic_transport_paragraph_color = get_theme_mod('logistic_transport_paragraph_color', '');
	    $logistic_transport_paragraph_font_family = get_theme_mod('logistic_transport_paragraph_font_family', '');
	    $logistic_transport_paragraph_font_size = get_theme_mod('logistic_transport_paragraph_font_size', '');
	// "a" tag
		$logistic_transport_atag_color = get_theme_mod('logistic_transport_atag_color', '');
	    $logistic_transport_atag_font_family = get_theme_mod('logistic_transport_atag_font_family', '');
	// "li" tag
		$logistic_transport_li_color = get_theme_mod('logistic_transport_li_color', '');
	    $logistic_transport_li_font_family = get_theme_mod('logistic_transport_li_font_family', '');
	// H1
		$logistic_transport_h1_color = get_theme_mod('logistic_transport_h1_color', '');
	    $logistic_transport_h1_font_family = get_theme_mod('logistic_transport_h1_font_family', '');
	    $logistic_transport_h1_font_size = get_theme_mod('logistic_transport_h1_font_size', '');
	// H2
		$logistic_transport_h2_color = get_theme_mod('logistic_transport_h2_color', '');
	    $logistic_transport_h2_font_family = get_theme_mod('logistic_transport_h2_font_family', '');
	    $logistic_transport_h2_font_size = get_theme_mod('logistic_transport_h2_font_size', '');
	// H3
		$logistic_transport_h3_color = get_theme_mod('logistic_transport_h3_color', '');
	    $logistic_transport_h3_font_family = get_theme_mod('logistic_transport_h3_font_family', '');
	    $logistic_transport_h3_font_size = get_theme_mod('logistic_transport_h3_font_size', '');
	// H4
		$logistic_transport_h4_color = get_theme_mod('logistic_transport_h4_color', '');
	    $logistic_transport_h4_font_family = get_theme_mod('logistic_transport_h4_font_family', '');
	    $logistic_transport_h4_font_size = get_theme_mod('logistic_transport_h4_font_size', '');
	// H5
		$logistic_transport_h5_color = get_theme_mod('logistic_transport_h5_color', '');
	    $logistic_transport_h5_font_family = get_theme_mod('logistic_transport_h5_font_family', '');
	    $logistic_transport_h5_font_size = get_theme_mod('logistic_transport_h5_font_size', '');
	// H6
		$logistic_transport_h6_color = get_theme_mod('logistic_transport_h6_color', '');
	    $logistic_transport_h6_font_family = get_theme_mod('logistic_transport_h6_font_family', '');
	    $logistic_transport_h6_font_size = get_theme_mod('logistic_transport_h6_font_size', '');
	    $logistic_transport_theme_color_first = get_theme_mod('logistic_transport_theme_color_first', '');
	    $logistic_transport_theme_color_second = get_theme_mod('logistic_transport_theme_color_second', '');

		$custom_css ='
			p,span{
			    color:'.esc_html($logistic_transport_paragraph_color).'!important;
			    font-family: '.esc_html($logistic_transport_paragraph_font_family).'!important;
			    font-size: '.esc_html($logistic_transport_paragraph_font_size).'!important;
			}
			a{
			    color:'.esc_html($logistic_transport_atag_color).'!important;
			    font-family: '.esc_html($logistic_transport_atag_font_family).';
			}
			li{
			    color:'.esc_html($logistic_transport_li_color).'!important;
			    font-family: '.esc_html($logistic_transport_li_font_family).';
			}
			h1{
			    color:'.esc_html($logistic_transport_h1_color).'!important;
			    font-family: '.esc_html($logistic_transport_h1_font_family).'!important;
			    font-size: '.esc_html($logistic_transport_h1_font_size).'!important;
			}
			h2{
			    color:'.esc_html($logistic_transport_h2_color).'!important;
			    font-family: '.esc_html($logistic_transport_h2_font_family).'!important;
			    font-size: '.esc_html($logistic_transport_h2_font_size).'!important;
			}
			h3{
			    color:'.esc_html($logistic_transport_h3_color).'!important;
			    font-family: '.esc_html($logistic_transport_h3_font_family).'!important;
			    font-size: '.esc_html($logistic_transport_h3_font_size).'!important;
			}
			h4{
			    color:'.esc_html($logistic_transport_h4_color).'!important;
			    font-family: '.esc_html($logistic_transport_h4_font_family).'!important;
			    font-size: '.esc_html($logistic_transport_h4_font_size).'!important;
			}
			h5{
			    color:'.esc_html($logistic_transport_h5_color).'!important;
			    font-family: '.esc_html($logistic_transport_h5_font_family).'!important;
			    font-size: '.esc_html($logistic_transport_h5_font_size).'!important;
			}
			h6{
			    color:'.esc_html($logistic_transport_h6_color).'!important;
			    font-family: '.esc_html($logistic_transport_h6_font_family).'!important;
			    font-size: '.esc_html($logistic_transport_h6_font_size).'!important;
			}
			.top-header,#header,.primary-navigation ul ul a,.page-template-custom-frontpage .request-btn a.blogbutton-small, #about hr, #services .service-content, .footertown input[type="submit"],input[type="submit"], .footertown th, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #slider .read-btn a.blogbutton-small, .read-btn a.blogbutton-small, #sidebar th, .pagination a:hover,.page-links a:hover, .pagination .current,.page-links .current, #sidebar input[type="submit"], .footertown .tagcloud a:hover,#sidebar .tagcloud a:hover, .metabox,.primary-navigation a:hover, #comments input[type="submit"].submit, .woocommerce-product-search button[type="submit"],.fixed-header, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{
			    background-color:'.esc_html($logistic_transport_theme_color_first).';
			}
			nav.woocommerce-MyAccount-navigation ul li{
			 background-color:'.esc_html($logistic_transport_theme_color_first).'!important;
			}
			.social-media a:hover,.request-btn a.blogbutton-small,.footertown .widget h3, a.showcoupon,.woocommerce-message::before,  #slider .carousel-control-next-icon i:hover,#slider .carousel-control-prev-icon i:hover, .topbox i:hover,  h3.widget-title a, .woocommerce ul.products li.product .star-rating{
			    color:'.esc_html($logistic_transport_theme_color_first).';
			}
			.page-template-custom-frontpage .request-btn a.blogbutton-small,.serach_inner form.search-form,.primary-navigation ul ul{
			    border-color:'.esc_html($logistic_transport_theme_color_first).';
			}
			@media screen and (max-width:1000px){
				.site_header, .toggle-menu, .menubox.nav, .search-box, .sidebar, .page-template-custom-frontpage .fixed-header{
				    background-color:'.esc_html($logistic_transport_theme_color_first).';
				}
			}
			@media screen and (max-width:768px) and (min-width:426px){
				.request-btn{
				    background-color:'.esc_html($logistic_transport_theme_color_first).';
				}
			}

			.hvr-sweep-to-right:before, .topbar, #header .header-top, .serach_outer, .footertown, #footer,#slider,.pagination span,.pagination a, .request-btn a.blogbutton-small{
			    background-color:'.esc_html($logistic_transport_theme_color_second).';
			}
			h1,h2,h3,h4,h5,h6, .middle-align h1,h1.product_title.entry-title,#tab-description h2,#reviews h2,h2#reply-title,.topbar span, #header .socialbox i, #about h2 a, #about p, .footertown select, #comments a.comment-reply-link,#comments a time, .services-box h2 a, #sidebar h3, #sidebar input[type="search"],input.search-field,h1.entry-title,.content-ma h2, .content-ma h3,  #header #header-inner .nav ul li ul li a, #sidebar h3 a{
			    color:'.esc_html($logistic_transport_theme_color_second).';
			}
			.serach_inner input.search-field, .serach_inner input.search-submit{
			    border-color:'.esc_html($logistic_transport_theme_color_second).';
			}';
			if(get_theme_mod('logistic_transport_topbar_hide') == false){
				$custom_css .=' #header .logo{';
					$custom_css .='padding: 0;';
				$custom_css .='}';
				$custom_css .=' .primary-navigation ul{';
					$custom_css .='padding: 8px 0;';
				$custom_css .='}';
				$custom_css .=' .search-box i{';
					$custom_css .='padding: 25px 10px;';
				$custom_css .='}';
				$custom_css .=' .request-btn{';
					$custom_css .='margin: 25px 0px;';
				$custom_css .='}';
			}

		/*---------------------------Width Layout -------------------*/
		$theme_lay = get_theme_mod( 'logistic_transport_width_options','Full Layout');
		    if($theme_lay == 'Full Layout'){
				$custom_css .='body{';
					$custom_css .='max-width: 100%;';
				$custom_css .='}';
			}else if($theme_lay == 'Contained Layout'){
				$custom_css .='body{';
					$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
				$custom_css .='}';
				$custom_css .='.page-template-custom-frontpage #header{';
					$custom_css .='left:0;';
				$custom_css .='}';
			}else if($theme_lay == 'Boxed Layout'){
				$custom_css .='body{';
					$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
				$custom_css .='}';
				$custom_css .='.page-template-custom-frontpage #header{';
					$custom_css .='padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
				$custom_css .='}';
				$custom_css .='header{';
					$custom_css .='position: relative;';
				$custom_css .='}';
				$custom_css .='
				@media screen and (max-width: 768px) and (min-width: 320px){
				.page-template-custom-frontpage #header{';
				$custom_css .=' padding:0;';
				$custom_css .='} }';
			}

	wp_add_inline_style( 'logistic-transport-basic-style',$custom_css );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js' );
	wp_enqueue_script( 'logistic-transport-custom-jquery', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery') ,'',true);
	wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/js/jquery.min.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'logistic_transport_scripts' );

/*radio button sanitization*/

function logistic_transport_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function logistic_transport_sanitize_dropdown_pages( $page_id, $setting ) {
  	// Ensure $input is an absolute integer.
  	$page_id = absint( $page_id );

  	// If $page_id is an ID of a published page, return it; otherwise, return the default.
  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/* Excerpt Limit Begin */
function logistic_transport_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// URL DEFINES
define('LOGISTIC_TRANSPORT_THEME_URL','https://www.themescaliber.com/themes/free-logistics-wordpress-theme/');
function logistic_transport_credit_link() {
    echo "<a href=".esc_url(LOGISTIC_TRANSPORT_THEME_URL)." target='_blank'>".esc_html__('Transport WordPress Theme','logistic-transport')."</a>";
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'logistic_transport_loop_columns');
if (!function_exists('logistic_transport_loop_columns')) {
	function logistic_transport_loop_columns() {
		return 3; 
	}
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';