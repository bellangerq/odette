<?php
  function register_header_menu() {
    register_nav_menu( 'header', __( 'Header', 'Menu located below site title.' ) );
  }

  add_action( 'after_setup_theme', 'register_header_menu' );

  wp_enqueue_style( 'style', get_stylesheet_uri() );
?>