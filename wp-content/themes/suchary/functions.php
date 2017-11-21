<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');

function jokes_enqueue_script() {


    wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/css/style.css',
        true );

    wp_enqueue_script(
        'jq',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js',
        ['jquery',],
        '1.0.0',
        true );

    wp_enqueue_script(
        'app',
        get_stylesheet_directory_uri() . '/js/app.js',
        ['jquery'],
        '1.0.0',
        true );



}
add_action( 'wp_enqueue_scripts' , 'jokes_enqueue_script' );








