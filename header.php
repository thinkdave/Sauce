<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'thm' ); ?></a>

    <header id="site-header" class="site-header" role="banner">
    	<div class="container">
	      	<div class="row">
		        <div class="site-branding">
					<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>"/>
						</a>
					</h1>
					<?php else : ?>
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>"/>
						</a>
					</p>
					<?php endif; ?>
		        </div> <!--/branding-->
	        	<nav id="nav" class="nav-header">
	            	<div class="responsive-menu-icon">
	            		<div class="menu-toggle">
			            	<span class="menu-bar"></span>
			            	<span class="menu-bar"></span>
			            	<span class="menu-bar"></span>
		            	</div>
	            	</div>
	            	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'after'    => '<span class="arrow"></span>', ) ); ?>
	          	</nav>
		    </div><!--/row-->
	    </div>
    </header>
    <div id="content" class="content">
