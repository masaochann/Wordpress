<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');


function my_theme_scripts()
{
    // CSS
    wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', [], '');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', ['bootstrap-css'], '');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', ['bootstrap-css', 'fontawesome'], '');

    // JS
    if (! is_admin()) {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js', [], '', true);
    }

    wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', ['jquery'], '', true);
    wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['jquery'], '', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', ['jquery'], '', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], '', true);
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');


