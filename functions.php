<?php
/* ajout de fonction au thème */
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

/* ajout du style et des scripts */
function register_assets()
{


    wp_enqueue_style(
        'jpg',
        get_stylesheet_uri(),
        array(),
        '1.0'

    );
    wp_enqueue_style(
        'wordpress-css',
        "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"

    );
    wp_enqueue_style(
        'jpg-custom-css',
        get_template_directory_uri() . '/assets/styles/main.css',
        array(),
        '1.0'

    );

    if (is_single()) {
        wp_enqueue_style( //fonctions pour charger un feuille de style css personalisé sur une page en particulier avec la fonction if(is_front_page)
            'jpg-custom-css',
            get_template_directory_uri() . '/assets/styles/projets.css',
            array(),
            '1.0'
        );
    }
}

wp_enqueue_script(
    'wordpress',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js'

);

wp_enqueue_script(
    'custom-scripts',
    get_template_directory_uri() . 'assets/scripts/main.js',
    array(),
    '1.0'
);

add_action('wp_enqueue_scripts', 'register_assets');


// prise en charge du logo du site
function custom_logo()
{
    add_theme_support('custom-logo', array(
        'height' => 150,
        'width'  => 150,
    ));
}

add_action('after_setup_theme', 'custom_logo');
//Gestion des menus 

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );







  

function williams_register_post_types() {
	// La déclaration de nos Custom Post Types et Taxonomies ira ici
    // CPT Portfolio
    $labels = array(
        'name' => 'Projets',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Projets'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'Projets', $args );

    /*       ----------------------------------------------------- */
    $labels = array(
        'name' => 'Landing',
        'all_items' => 'Landing',  // affiché dans le sous menu
        'singular_name' => 'Landing',
        'add_new_item' => 'Ajouter une landing',
        'edit_item' => 'Modifier la landing',
        'menu_name' => 'landing'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'Landing', $args );

    /*       ----------------------------------------------------- */

    $labels = array(
        'name' => 'Galerie',
        'all_items' => 'Galerie',  // affiché dans le sous menu
        'singular_name' => 'Galerie',
        'add_new_item' => 'Ajouter une Galerie',
        'edit_item' => 'Modifier la Galerie',
        'menu_name' => 'Galerie'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'Galerie', $args );
    
}
add_action( 'init', 'williams_register_post_types' );

