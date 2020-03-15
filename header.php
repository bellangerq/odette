<html <?php language_attributes() ?>>

<head><?php wp_head(); ?></head>

<body>
  <header class="site-header">
    <a href="#main" class="sr-only">Skip to main content</a>
    <a href="<?php echo get_option('home'); ?>" class="site-title">
      <?php bloginfo('name'); ?>
    </a>

    <p class="site-description"><?php echo get_bloginfo('description'); ?></p>

    <?php
    if (has_nav_menu('header')) {
      echo wp_nav_menu('header');
    } ?>
  </header>
  <main id="main" class="site-main">