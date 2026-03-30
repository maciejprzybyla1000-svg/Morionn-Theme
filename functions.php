<?php

function morionn_style() {
    wp_enqueue_style('morionn-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'morionn_style');

add_theme_support('custom-logo');

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_script('gallery', get_template_directory_uri('wp_content/themes/morionn-theme/js/index.js') . '/js/index.js', [], null, true);
});

add_image_size('morion-product', 500, 550, true);

