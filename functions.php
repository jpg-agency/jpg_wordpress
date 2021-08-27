<?php
/* ajout de fonction au thème */
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

/* ajout du style et des scripts */
function register_assets()
{

    if (is_single()) {
        wp_enqueue_style( //fonctions pour charger un feuille de style css personalisé sur une page en particulier avec la fonction if(is_front_page)
            'jpg-custom-single-css',
            get_template_directory_uri() . '/assets/styles/projets.css',
            array(),
            '1.0'
        );
        }
    if (is_page()) {
        wp_enqueue_style( //fonctions pour charger un feuille de style css personalisé sur une page en particulier avec la fonction if(is_front_page)
            'jpg-custom-page-css',
            get_template_directory_uri() . '/assets/styles/page.css',
            array(),
            '1.0'
        );
        }


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




wp_enqueue_script(
    'wordpress',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js'

);

wp_enqueue_script(
    'jpg',
    get_template_directory_uri() . '/assets/scripts/main.js',
    array('wordpress'),
    '1.0',
    true
);
}

add_action('wp_enqueue_scripts', 'register_assets');


// prise en charge du logo du site
function custom_logo()
{
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width'  => 100,
    ));
}

add_action('after_setup_theme', 'custom_logo');
//Gestion des menus 

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );







  

function JPG_register_post_types() {
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

    /*       ----------------------------------------------------- */
     // CPT adresse
     $labels = array(
        'name' => 'adresse',
        'singular_name' => 'adresse',
        'add_new_item' => 'Ajouter une adresse',
        'edit_item' => 'Modifier l\'adresse',
        'menu_name' => 'adresse'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor'),
        'menu_position' => 5,
        'menu_icon'   => 'dashicons-money-alt',
    );

    register_post_type('adresse', $args);
}



// CUstom Navbar


register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
    'container' => 'ul', // afin d'éviter d'avoir une div autour 
    'menu_class' => 'navbar', // ma classe personnalisée 
) );





// register a new menu
register_nav_menu('main-menu', 'Main menu');

add_theme_support( 'custom-header' );
function themename_custom_header_setup() {
    $defaults = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1080,
        // Header image height (in pixels)
        'height'            => 198,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin 
        'uploads'       => false,
        // function to be called in theme head section
        'wp-head-callback'      => 'wphead_cb',
        //  function to be called in preview page head section
        'admin-head-callback'       => 'adminhead_cb',
        // function to produce preview markup in the admin screen
        'admin-preview-callback'    => 'adminpreview_cb',
        );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );




add_action( 'init', 'JPG_register_post_types' );

