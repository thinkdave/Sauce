<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed">

  <header id="site-header" class="site-header" role="banner">
    <div class="row">
      <div class="site-branding small-12 large-3 columns">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
      </div><!--/branding-->
      <div class="menu-wrapper small-12 large-9 columns">
        <nav id="nav" class="nav-header" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
        </nav>
      </div><!--/menu-wrapper-->
    </div><!--/row-->
  </header>

	<div id="main" class="site-main" role="main">
    <div class="content-sidebar-wrapper">
