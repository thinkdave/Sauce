<?php
// ========================================
// Theme Setup
// ========================================
if ( ! function_exists( 'thm_setup' ) ) :
	function thm_setup() {
		add_theme_support( 'automatic-feed-links' );

		global $content_width;
		if ( ! isset( $content_width ) ) $content_width = 600;

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'primary' => esc_html__( 'Main Menu', 'thm' )
		) );

		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	}
endif;

add_action( 'after_setup_theme', 'thm_setup' );


// ========================================
// Register Widgets
// ========================================
function thm_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Widgets', 'thm' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'thm_widgets_init' );


// ========================================
// Enqueue Styles
// ========================================
if ( ! function_exists( 'thm_load_style' ) ) {
  function thm_load_style() {
    if ( ! is_admin() ) {
      wp_enqueue_style( 'thm-style', get_stylesheet_uri(), array( 'thm-fonts', 'font-awesome' ) );
      wp_register_style( 'font-awesome', '//use.fontawesome.com/releases/v5.0.13/css/all.css' );
      wp_register_style( 'thm-fonts', '//fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i', array(), null );
    }
  }

  add_action( 'wp_enqueue_scripts', 'thm_load_style' );
}


// ========================================
// Enqueue Scripts
// ========================================
if ( ! function_exists( 'thm_enqueue_scripts' ) ) {
  function thm_enqueue_scripts() {
    wp_enqueue_script( 'thm-main', get_template_directory_uri() . '/js/main.js', array( 'jquery'), '', true );

    if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }

		wp_enqueue_script( 'thm-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '', true );
  }

  add_action( 'wp_enqueue_scripts', 'thm_enqueue_scripts' );
}


// ========================================
// Custom template tags for this theme
// ========================================
require get_template_directory() . '/inc/template-tags.php';


// ========================================
// Custom functions for this theme
// ========================================
require get_template_directory() . '/inc/custom-functions.php';
