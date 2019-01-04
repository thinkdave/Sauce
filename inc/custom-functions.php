<?php

// ========================================
// Modify HTML class to indicate JS
// ========================================
if ( ! function_exists( 'thm_has_js' ) ) {
  function thm_has_js() { ?>
  <script>jQuery( 'html' ).removeClass( 'no-js' ).addClass( 'js' );</script>
  <?php }

  add_action( 'wp_head', 'thm_has_js' );
}


// ========================================
// Adds custom classes to the array
// of body classes.
// ========================================
function thm_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

  // Flexible Content Loop
  if( have_rows( 'blocks' ) ) : while( have_rows( 'blocks' ) ) : the_row();
    if( get_row_layout() == 'block_hero' ) {
      $classes[] = 'has-hero';
    }else{
      $classes[] = 'no-hero';	
    }
  endwhile;

  else :
    $classes[] = 'no-hero';
  endif;

	return $classes;
}

add_filter( 'body_class', 'thm_body_classes' );


// ========================================
// Add a pingback url auto-discovery
// header for single posts, pages,
// or attachments.
// ========================================
function thm_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}

add_action( 'wp_head', 'thm_pingback_header' );
