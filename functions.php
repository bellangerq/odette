<?php
// Register main menu
function register_header_menu()
{
  register_nav_menu('header', 'Menu located below site title.');
}

// Add custom class to menu items
function menu_class($classes)
{
  $classes[] = 'header-nav-item';
  return $classes;
}

// Add custom class to menu links
function menu_link_class($attrs)
{
  $attrs['class'] = 'header-nav-item-link';
  return $attrs;
}

// Custom pagination structure
function pagination()
{
  $pages = paginate_links(['type' => 'array']);
  if ($pages === null) {
    return;
  }
  echo '<nav aria-label="Pagination">';
  echo '<ul class="pagination">';
  foreach($pages as $page) {
    echo '<li class="pagination-item">';
    echo str_replace('page-numbers', 'pagination-link', $page);
    echo '</li>';
  }
  echo '</ul>';
  echo '</nav>';
}

// Custom tags structure
function tags()
{
  $tags = get_the_tags();
  if (empty($tags)) {
    return;
  }
  echo '<ul class="tags">';
  foreach($tags as $tag) {
    echo '<li class="tag"><a class="tag-link" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
  };
  echo '</ul>';
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

add_theme_support('title-tag');

add_action('after_setup_theme', 'register_header_menu');
add_action('wp_enqueue_scripts', 'theme_styles');

add_filter('nav_menu_css_class', 'menu_class');
add_filter('nav_menu_link_attributes', 'menu_link_class');
