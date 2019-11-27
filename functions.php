<?php 

// Add theme support

add_theme_support ('title-tag');
add_theme_support ('post-thumbnails');
add_theme_support ('post-format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
add_theme_support ('html5');
add_theme_support ('automatic-feed-links');
add_theme_support ('custom-background');
add_theme_support ('custom-header');
add_theme_support ('custom-logo');
add_theme_support ('custom-selective-refresh-widgets');
add_theme_support ('starter-content');

//load in our CSS

function station6_enqueue_styles() {
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
}

add_action ('wp_enqueue_scripts', 'station6_enqueue_styles');


// Register menu locations
register_nav_menus(
    [
        'main-menu' => esc_html__('Main Menu', 'station6'),
        'footer-menu' => esc_html__('Footer Menu', 'station6')
    ]
);

// Widget Areas

function station6_widgets_init() {
    register_sidebar([
        'name'          => esc_html__('Main Sidebar', 'station6'),
        'id'            => 'main-sidebar',
        'description'   => esc_html__( 'Add widgets for main sidebar here', 'station6' ),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',     
    ]);

    register_sidebar([
        'name'          => esc_html__('Footer Widget Area', 'station6'),
        'id'            => 'footer-widget',
        'description'   => esc_html__( 'Add widgets for your footer here', 'station6' ),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',     
    ]);
}
add_action('widgets_init', 'station6_widgets_init')



?>