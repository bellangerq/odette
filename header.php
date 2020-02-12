<html <?php language_attributes() ?>>
  <head><?php wp_head(); ?></head>
  <body>
    <header class="site-header">
      <a href="#main">Skip to content</a>
      <a href="<?php echo get_option('home'); ?>">
        <?php bloginfo('name');?>
      </a>
      <?php if ( bloginfo('description') ) { ?>
        <p><?php bloginfo('description'); ?></p>
      <?php } ?>
      <?php
      if ( has_nav_menu( 'header' ) ) {
        echo wp_nav_menu('header');
      } ?>
    </header>
    <main id="main" class="site-main">