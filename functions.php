<?php
// Register main menu
function register_header_menu()
{
  register_nav_menu('header', 'Menu located below site title.');
}

// Add custom class to menu items
function menu_class($classes)
{
  $classes[] = 'site-nav-item';
  return $classes;
}

// Add custom class to menu links
function menu_link_class($attrs)
{
  $attrs['class'] = 'site-nav-item-link';
  return $attrs;
}

// Load styles without altering admin area
function theme_styles()
{
  wp_enqueue_style(
    'styles',
    get_template_directory_uri() . '/style.css',
    array(),
    false,
    'all'
  );
}

add_action('after_setup_theme', 'register_header_menu');
add_action('wp_enqueue_scripts', 'theme_styles');

add_filter('nav_menu_css_class', 'menu_class');
add_filter('nav_menu_link_attributes', 'menu_link_class');
