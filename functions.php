<?php
// ========================================
// Theme Setup
// ========================================
if ( ! function_exists( 'thm_setup' ) ) :
	function thm_setup() {
		// RSS feeds
		add_theme_support( 'automatic-feed-links' );

    // Set content-width
		global $content_width;
		if ( ! isset( $content_width ) ) $content_width = 600;

		// Let WordPress handle the title tag
		add_theme_support( 'title-tag' );

		// Post thumbnail support
		add_theme_support( 'post-thumbnails' );

		// WordPress Menus
		register_nav_menus( array(
			'primary' => esc_html__( 'Main Menu', 'thm' )
		) );

		// HTML5 support
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
      wp_enqueue_style( 'thm-style', get_stylesheet_uri(), array( 'thm-fonts' ) );
      wp_register_style( 'thm-fonts', '//fonts.googleapis.com/css?family=Libre+Franklin:300,400,400i,500,700,700i&amp;subset=latin-ext', array(), null );
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
  }

  add_action( 'wp_enqueue_scripts', 'thm_enqueue_scripts' );
}


// ========================================
// Modify HTML class to indicate JS
// ========================================
if ( ! function_exists( 'thm_has_js' ) ) {
  function thm_has_js() { ?>
  <script>jQuery( 'html' ).removeClass( 'no-js' ).addClass( 'js' );</script>
  <?php }

  add_action( 'wp_head', 'thm_has_js' );
}
