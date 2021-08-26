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

    // Charger le style de Bootstrap
    wp_enqueue_style(
        'bootstrap-css',
        "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css",
        array(),
        '1.0'

    );
    wp_enqueue_style(
        'jpg-custom-css',
        get_template_directory_uri() . '/assets/styles/main.css',
        array(),
        '1.0'

    );
<<<<<<< HEAD
=======

    if (is_page_template()) {
        wp_enqueue_style( //fonctions pour charger un feuille de style css personalisé sur une page en particulier avec la fonction if(is_front_page)
            'jpg-custom-css',
            get_template_directory_uri() . '/assets/styles/projets.css',
            array(),
            '1.0'
        );
    }
}
>>>>>>> williams


    // Charger le script de Bootstrap
    wp_enqueue_script(
        'bootstrap-script',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js',
        array(),
        '1.0'

<<<<<<< HEAD
    );
=======
wp_enqueue_script(
    'custom-scripts',
    get_template_directory_uri() . 'assets/scripts/main.js',
    array(),
    '1.0'
);
>>>>>>> williams

    wp_enqueue_script(
        'custom-scripts',
        get_template_directory_uri() . '/scripts/main.js',
        array(),
        '1.0'
    );
}
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

<<<<<<< HEAD

// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
    private $current_item;
    private $dropdown_menu_alignment_values = [
        'dropdown-menu-start',
        'dropdown-menu-end',
        'dropdown-menu-sm-start',
        'dropdown-menu-sm-end',
        'dropdown-menu-md-start',
        'dropdown-menu-md-end',
        'dropdown-menu-lg-start',
        'dropdown-menu-lg-end',
        'dropdown-menu-xl-start',
        'dropdown-menu-xl-end',
        'dropdown-menu-xxl-start',
        'dropdown-menu-xxl-end'
    ];

    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $dropdown_menu_class[] = '';
        foreach ($this->current_item->classes as $class) {
            if (in_array($class, $this->dropdown_menu_alignment_values)) {
                $dropdown_menu_class[] = $class;
            }
        }
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ", $dropdown_menu_class)) . " depth_$depth\">\n";
    }
=======
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

>>>>>>> williams

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $this->current_item = $item;

<<<<<<< HEAD
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-menu dropdown-menu-end';
        }

        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
        $nav_link_class = ($depth > 0) ? 'dropdown-item ' : 'nav-link ';
        $attributes .= ($args->walker->has_children) ? ' class="' . $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="' . $nav_link_class . $active_class . '"';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
// register a new menu
register_nav_menu('main-menu', 'Main menu');





// Déclarer un custom post types
function alphaweb_register_post_types()
{

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
add_action('init', 'alphaweb_register_post_types');
=======




  

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

// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
    private $current_item;
    private $dropdown_menu_alignment_values = [
        'dropdown-menu-start',
        'dropdown-menu-end',
        'dropdown-menu-sm-start',
        'dropdown-menu-sm-end',
        'dropdown-menu-md-start',
        'dropdown-menu-md-end',
        'dropdown-menu-lg-start',
        'dropdown-menu-lg-end',
        'dropdown-menu-xl-start',
        'dropdown-menu-xl-end',
        'dropdown-menu-xxl-start',
        'dropdown-menu-xxl-end'
    ];

    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $dropdown_menu_class[] = '';
        foreach ($this->current_item->classes as $class) {
            if (in_array($class, $this->dropdown_menu_alignment_values)) {
                $dropdown_menu_class[] = $class;
            }
        }
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ", $dropdown_menu_class)) . " depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $this->current_item = $item;

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-menu dropdown-menu-end';
        }

        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
        $nav_link_class = ($depth > 0) ? 'dropdown-item ' : 'nav-link ';
        $attributes .= ($args->walker->has_children) ? ' class="' . $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="' . $nav_link_class . $active_class . '"';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
// register a new menu
register_nav_menu('main-menu', 'Main menu');







add_action( 'init', 'JPG_register_post_types' );

>>>>>>> williams
