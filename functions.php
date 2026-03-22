<?php

function morionn_style() {
    wp_enqueue_style('morionn-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'morionn_style');

add_theme_support('custom-logo');

add_image_size('morion-product', 500, 550, true);

