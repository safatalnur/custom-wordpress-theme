<?php

// Add script and stylesheets
function alnur_scripts() {
    // Custom Style
    $custom_css_file = get_stylesheet_directory() . '/assets/css/alnur-style.css';
    $file_ver = file_exists($custom_css_file) ? date("Ymd-Gis", filemtime($custom_css_file)) : false;
    wp_enqueue_style('alnur_style', get_stylesheet_directory_uri() . '/assets/css/alnur-style.css', array(), $file_ver);   
    // Custom JS
    wp_enqueue_script('alnur_js', get_stylesheet_directory_uri().'/assets/js/alnur.js', array('jquery'), '1.0.0', true);
    // Bootstrap 5.3.8 CDN stylesheets
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', array(), '5.3.8', 'all');
    // Bootstrap 5.3.8 CDN JS
    wp_enqueue_script('bootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array('jquery'), '5.3.8', true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js', array('jquery'), '5.3.8', true);
}

add_action('wp_enqueue_scripts', 'alnur_scripts');

/**
 * Activate menus
 */
function custom_theme_setup() {
    load_theme_textdomain('custom_theme', get_template_directory() . '/languages');
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'custom_theme'),
        'secondary'  => __('Footer Menu', 'custom_theme'),
    ));
}
add_action('after_setup_theme', 'custom_theme_setup');

/**
 * Activate additional theme support
 */
function additional_custom_theme_setup() {
    // Add background color, image option to Theme > Appearance
    add_theme_support('custom-background');
    // Add Header option to Theme > Appearance
    add_theme_support('custom-header');
    // Add Post Thumbnais option to individual posts
    add_theme_support('post-thumbnails');
    // Post page formating theme support
    add_theme_support('post-formats', array('aside', 'image', 'video'));
}
add_action('init', 'additional_custom_theme_setup');

/**
 *  Activate Sidebar function
 */
function custom_theme_widget_setup() {
    register_sidebar(array(
        'name'      => 'Sidebar',
        'id'        => 'sidebar-1',
        'class'     => 'custom',
        'description'   => 'Standard Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'      => 'Home Sidebar',
        'id'        => 'home-sidebar',
        'class'     => 'custom',
        'description'   => 'Standard Sidebar for homepage',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'custom_theme_widget_setup');

// If classic widget screen is needed, then the block-based widget editor needs to be disabled
add_filter('use_widgets_block_editor', '__return_false');

/**
 * Add Post Format column on All posts admin panel
 */
function add_post_format_column($columns) {
    $columns['post_format'] = __( 'Post Format', 'custom_theme' );
    // Move Post Format column before Date column
    if (isset($columns['date'])) {
        $date = $columns['date'];
        unset($columns['date']);
        $columns['date'] = $date;
    }
    return $columns;
}
add_action('manage_posts_columns', 'add_post_format_column');

/**
 * Populate Post Format column
 */
function populate_post_format_column($columns, $post_id) {
    if ($columns === 'post_format') :
        $format = get_post_format($post_id);
        echo $format ? ucfirst($format) : __('Standard', 'custom_theme');
    endif;
}
add_action('manage_posts_custom_column', 'populate_post_format_column', 10, 2);
?>