<?php
function quirkyrabbit_enqueue_scripts() {
    wp_enqueue_style( 'quirkyrabbit-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'quirkyrabbit_enqueue_scripts' );
