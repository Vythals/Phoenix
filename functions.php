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

    /* Intégration des polices de Google */
    wp_enqueue_style('style-goolefont', 'https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet', false);
}
add_action('wp_enqueue_scripts', 'ajouter_styles');


/* ----------------------------------------------------------------------------- Enregistrement des menus */
function enregistrement_nav_menu()
{
    register_nav_menus(array(
        'entete' => 'Menu entete',
        'evt' => 'Menu évènement',
        'projets' => 'Menu projets',
    ));
}
add_action('init', 'enregistrement_nav_menu', 0);


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
