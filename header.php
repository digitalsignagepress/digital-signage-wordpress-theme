<!Doctype html>
<html <?php language_attributes(); ?> class="no-js digitalsignagepress-header" >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php if ( is_singular() && pings_open() ) { ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php }
    wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrapper" class="clearfix">
  <div id="site-title"><?php bloginfo( 'name' ); ?></div>
  <div id="site-description"><?php bloginfo( 'description' ); ?></div>
  </section>
  <nav id="menu" role="navigation">
  <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
  </nav>
