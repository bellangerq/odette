<html <?php language_attributes() ?>>

<head><?php wp_head(); ?></head>

<body>
  <header class="header">
    <a href="#main" class="sr-only">Skip to main content</a>
    <a href="<?php echo get_option('home'); ?>" class="header-title">
      <?php bloginfo('name'); ?>
    </a>
    <nav>
      <?php
      if (has_nav_menu('header')) {
        echo wp_nav_menu([
          'theme_location' => 'header',
          'container' => false,
          'depth' => 1,
          'menu_class' => 'header-nav'
        ]);
      }
      ?>
    </nav>
  </header>
  <main id="main" class="header-main">