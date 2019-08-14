<?php

//*********Instead of @import Use enqueue ad recommended by WordPress Codex **********/

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyseventeen-style' for the Twenty Seventeen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

//The following function does the same thing (in a more correct way) of line 16 of header-image.php in template-parts/header
//customizing the header from the functions.php file of a child theme, thanks to the twentyseventeen_custom_header_args FILTER. 
// function my_custom_header_args($args){
//     $args['default-image'] = get_theme_file_uri('/assets/images/header-image.jpg');
//     return $args;
// }
// add_filter('twentyseventeen_custom_header_args', 'my_custom_header_args');