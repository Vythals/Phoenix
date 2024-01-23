<?php
/* ----------------------------------------------------------------------------- Lier les styles */

if (!defined('_S_VERSION')) {
    // Remplacer le numéro de la version à chaque publication.
    define('_S_VERSION', '1.0.0');
}

function ajouter_styles()
{

    wp_enqueue_style(
        'style-principale',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'ajouter_styles');



/*------------------------------------------------------------------------------ add_theme_support() */
add_theme_support('title-tag');
add_theme_support(
    'custom-logo',
    array(
        'height' => 50,
        'width'  => 50,
    )
);
add_theme_support('post-thumbnails');
add_theme_support('custom-background');
