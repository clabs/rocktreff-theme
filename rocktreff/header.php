<?php

  header( 'Access-Control-Allow-Origin: http://live.rocktreff.de' );

  echo "<!DOCTYPE html>";
?>
<!--
______ _____ _____  _   _____________ _________________
| ___ \  _  /  __ \| | / /_   _| ___ \  ___|  ___|  ___|
| |_/ / | | | /  \/| |/ /  | | | |_/ / |__ | |_  | |_
|    /| | | | |    |    \  | | |    /|  __||  _| |  _|
| |\ \\ \_/ / \__/\| |\  \ | | | |\ \| |___| |   | |
\_| \_|\___/ \____/\_| \_/ \_/ \_| \_\____/\_|   \_|
-->
<html <?php language_attributes(); ?>>
<head>
  <title>
    <?php
      /*
       * Print the <title> tag based on what is being viewed.
       */
      global $page, $paged;
      wp_title( '|', true, 'right' );
      // Add the blog name.
      bloginfo( 'name' );
      // Add the blog description for the home/front page.
      $site_description = get_bloginfo( 'description', 'display' );
      if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
      // Add a page number if necessary:
      if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'rocktreff' ), max( $paged, $page ) );
    ?>
  </title>
  <?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.all.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/Hyphenator.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/patterns/de.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/index.js"></script>
  <!--[if lte IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
  <![endif]-->
</head>
<body <?php body_class(); ?>>
  <div id="top">
    <div class="container">
      <ul class="presenter_top">
        <li class="ja"><a href="http://www.berlin.de/ba-tempelhof-schoeneberg/organisationseinheit/jugend-familie/" target="_blank"></a></li>
        <li class="cc"><a href="http://catering-company-berlin.de/" target="_blank"></a></li>
        <li class="starfm"><a href="http://starfm.de/" target="_blank"></a></li>
        <li class="psd"><a href="http://www.psd-berlin-brandenburg.de/" target="_blank"></a></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <header class="row">
      <div class="span12">
        <div id="logo">
          <a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/30_rocktreff_logo_2013.png"></a>
        </div>
        <div id="stage" style="overflow-x: hidden; overflow-y: hidden;"></div>
      </div>
    </header>
    <nav class="row span12">
      <ul>
        <?php wp_list_pages(
          array(
            'title_li' => '',
            'child_of' => 111,
            'depth' => 1
        )); ?>
      </ul>
    </nav>