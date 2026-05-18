<?php
defined( 'ABSPATH' ) || exit;

define( 'NLA_VERSION', '1.0.0' );
define( 'NLA_URI', get_template_directory_uri() );

/* ------------------------------------------------------------------
   Theme setup
------------------------------------------------------------------ */
function nla_setup() {
	load_theme_textdomain( 'next-level-academy', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
	add_theme_support( 'custom-logo', [
		'height'      => 60,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	] );

	register_nav_menus( [
		'primary' => __( 'Primary Menu', 'next-level-academy' ),
		'footer'  => __( 'Footer Menu', 'next-level-academy' ),
	] );
}
add_action( 'after_setup_theme', 'nla_setup' );

/* ------------------------------------------------------------------
   Enqueue styles & scripts
------------------------------------------------------------------ */
function nla_enqueue_assets() {
	$uri = NLA_URI . '/assets';
	$v   = NLA_VERSION;

	// Vendor CSS
	wp_enqueue_style( 'nla-bootstrap',      $uri . '/css/vendor/bootstrap.min.css',    [], $v );
	wp_enqueue_style( 'nla-remixicon',      $uri . '/css/vendor/remixicon.css',         [], $v );
	wp_enqueue_style( 'nla-eduvibe-font',   $uri . '/css/vendor/eduvibe-font.css',      [], $v );
	wp_enqueue_style( 'nla-magnify',        $uri . '/css/vendor/magnifypopup.css',      [], $v );
	wp_enqueue_style( 'nla-slick',          $uri . '/css/vendor/slick.css',             [], $v );
	wp_enqueue_style( 'nla-odometer',       $uri . '/css/vendor/odometer.css',          [], $v );
	wp_enqueue_style( 'nla-lightbox',       $uri . '/css/vendor/lightbox.css',          [], $v );
	wp_enqueue_style( 'nla-animation',      $uri . '/css/vendor/animation.css',         [], $v );
	wp_enqueue_style( 'nla-jquery-ui',      $uri . '/css/vendor/jqueru-ui-min.css',     [], $v );
	wp_enqueue_style( 'nla-main',           $uri . '/css/style.css',                    [], $v );
	wp_enqueue_style( 'nla-custom',         NLA_URI . '/style.css',                     [], $v );

	// Vendor JS
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery',            $uri . '/js/vendor/jquery.js',              [],      $v, false );
	wp_enqueue_script( 'nla-modernizr',     $uri . '/js/vendor/modernizr.min.js',       [],      $v, false );
	wp_enqueue_script( 'nla-bootstrap',     $uri . '/js/vendor/bootstrap.min.js',       ['jquery'], $v, true );
	wp_enqueue_script( 'nla-sal',           $uri . '/js/vendor/sal.min.js',             ['jquery'], $v, true );
	wp_enqueue_script( 'nla-backtotop',     $uri . '/js/vendor/backtotop.js',           ['jquery'], $v, true );
	wp_enqueue_script( 'nla-magnify',       $uri . '/js/vendor/magnifypopup.js',        ['jquery'], $v, true );
	wp_enqueue_script( 'nla-slick',         $uri . '/js/vendor/slick.js',               ['jquery'], $v, true );
	wp_enqueue_script( 'nla-countdown',     $uri . '/js/vendor/countdown.js',           ['jquery'], $v, true );
	wp_enqueue_script( 'nla-appear',        $uri . '/js/vendor/jquery-appear.js',       ['jquery'], $v, true );
	wp_enqueue_script( 'nla-odometer',      $uri . '/js/vendor/odometer.js',            ['jquery'], $v, true );
	wp_enqueue_script( 'nla-isotope',       $uri . '/js/vendor/isotop.js',              ['jquery'], $v, true );
	wp_enqueue_script( 'nla-imageloaded',   $uri . '/js/vendor/imageloaded.js',         ['jquery'], $v, true );
	wp_enqueue_script( 'nla-lightbox',      $uri . '/js/vendor/lightbox.js',            ['jquery'], $v, true );
	wp_enqueue_script( 'nla-wow',           $uri . '/js/vendor/wow.js',                 ['jquery'], $v, true );
	wp_enqueue_script( 'nla-paralax',       $uri . '/js/vendor/paralax.min.js',         ['jquery'], $v, true );
	wp_enqueue_script( 'nla-paralax-scroll',$uri . '/js/vendor/paralax-scroll.js',      ['jquery'], $v, true );
	wp_enqueue_script( 'nla-jquery-ui',     $uri . '/js/vendor/jquery-ui.js',           ['jquery'], $v, true );
	wp_enqueue_script( 'nla-tilt',          $uri . '/js/vendor/tilt.jquery.min.js',     ['jquery'], $v, true );
	wp_enqueue_script( 'nla-main',          $uri . '/js/main.js',                       ['jquery'], $v, true );
}
add_action( 'wp_enqueue_scripts', 'nla_enqueue_assets' );

/* ------------------------------------------------------------------
   Custom Post Type: Course
------------------------------------------------------------------ */
function nla_register_cpt_course() {
	$labels = [
		'name'               => __( 'Courses', 'next-level-academy' ),
		'singular_name'      => __( 'Course', 'next-level-academy' ),
		'add_new'            => __( 'Add New', 'next-level-academy' ),
		'add_new_item'       => __( 'Add New Course', 'next-level-academy' ),
		'edit_item'          => __( 'Edit Course', 'next-level-academy' ),
		'new_item'           => __( 'New Course', 'next-level-academy' ),
		'all_items'          => __( 'All Courses', 'next-level-academy' ),
		'view_item'          => __( 'View Course', 'next-level-academy' ),
		'search_items'       => __( 'Search Courses', 'next-level-academy' ),
		'not_found'          => __( 'No courses found', 'next-level-academy' ),
		'not_found_in_trash' => __( 'No courses found in Trash', 'next-level-academy' ),
		'menu_name'          => __( 'Courses', 'next-level-academy' ),
	];

	register_post_type( 'course', [
		'labels'             => $labels,
		'public'             => true,
		'has_archive'        => true,
		'show_in_rest'       => true,
		'menu_icon'          => 'dashicons-welcome-learn-more',
		'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
		'rewrite'            => [ 'slug' => 'courses' ],
	] );
}
add_action( 'init', 'nla_register_cpt_course' );

/* ------------------------------------------------------------------
   Custom Taxonomy: Course Category
------------------------------------------------------------------ */
function nla_register_course_taxonomy() {
	register_taxonomy( 'course_category', 'course', [
		'label'        => __( 'Course Category', 'next-level-academy' ),
		'rewrite'      => [ 'slug' => 'course-category' ],
		'hierarchical' => true,
		'show_in_rest' => true,
	] );
}
add_action( 'init', 'nla_register_course_taxonomy' );

/* ------------------------------------------------------------------
   Helper: get course meta with fallback
------------------------------------------------------------------ */
function nla_course_meta( $key, $default = '' ) {
	$val = get_post_meta( get_the_ID(), $key, true );
	return $val !== '' ? esc_html( $val ) : $default;
}

/* ------------------------------------------------------------------
   Helper: nav menu walker — adds has-droupdown & submenu classes
------------------------------------------------------------------ */
class NLA_Nav_Walker extends Walker_Nav_Menu {
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="submenu">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>';
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$has_children = in_array( 'menu-item-has-children', $item->classes );
		$class        = $has_children ? ' class="has-droupdown"' : '';
		$output      .= '<li' . $class . '>';
		$output      .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}

/* ------------------------------------------------------------------
   Custom excerpt length
------------------------------------------------------------------ */
function nla_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'nla_excerpt_length' );
