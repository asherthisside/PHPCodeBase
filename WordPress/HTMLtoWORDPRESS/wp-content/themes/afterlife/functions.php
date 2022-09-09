<?php 
function afterlife_load_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('afterlife_main_css', get_template_directory_uri()."/style.css", array('afterlife_bootstrap_css'), $version, 'all');
    wp_enqueue_style('afterlife_bootstrap_css', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('afterlife_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'afterlife_load_styles');

function afterlife_load_scripts() {
    wp_enqueue_script('afterlife_jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js",array(), '3.4.1', true);
    wp_enqueue_script('afterlife_popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",array(), '1.16.0', true);
    wp_enqueue_script('afterlife_bootstrap_js',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",array(), '4.4.1', true);
    wp_enqueue_script('afterlife_main_js', get_template_directory_uri()."/assets/js/main.js",array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'afterlife_load_scripts');

function afterlife_load_title() {
    add_theme_support('title_tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'afterlife_load_title');

function afterlife_menus() {
    $locations = array(
        'primary' => 'Desktop Sidebar Menu',
        'footer' => 'Footer Menu'
    );
    register_nav_menus($locations);
}
add_action('init', 'afterlife_menus');
?>