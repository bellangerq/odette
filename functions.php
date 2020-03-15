<?php
  // Register main menu
  function register_header_menu() {
    register_nav_menu( 'header', __( 'Header', 'Menu located below site title.' ) );
  }
  add_action( 'after_setup_theme', 'register_header_menu' );

  // Load styles without altering admin area
  function theme_styles() {
    wp_enqueue_style(
      'styles',
      get_template_directory_uri() . '/style.css',
      array(),
      false,
      'all'
    );
  }
  add_action( 'wp_enqueue_scripts', 'theme_styles' );
