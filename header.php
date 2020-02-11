<html <?php language_attributes() ?>>
  <head><?php wp_head(); ?></head>
  <body>
    <header>
      <a href="#main">Skip to content</a>
      <div>
        <a href="<?php echo get_option('home'); ?>">
          <?php bloginfo('name');?>
        </a>
        <?php if ( bloginfo('description') ) { ?>
          <span><?php bloginfo('description'); ?></span>
        <?php } ?>
      </div>

      <?php echo wp_get_nav_menu_items('header') ?>

      <?php
      if ( has_nav_menu( 'header' ) ) {
        echo wp_nav_menu('header');
      } ?>
    </header>
    <main id="main">