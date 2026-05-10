<?php

function your_rights_files() {

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;500;600;700&display=swap'
    );

    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
    );

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'inner-pages-style',
        get_template_directory_uri() . '/assets/css/inner-pages.css'
    );

}

add_action('wp_enqueue_scripts', 'your_rights_files');



function your_rights_features() {

    add_theme_support('menus');

    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'footer-menu' => 'Footer Menu'
    ));

}

add_action('after_setup_theme', 'your_rights_features');