<?php
/**
 * Functions and definitions
 */

function charger_styles() {
    // wp_enqueue_style( string $handle, string $src = '', string[] $deps = array());
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/style.css', ['theme-reset']);
    wp_enqueue_style('theme-reset', get_template_directory_uri() . '/css/reset.css');

    // Fonctionne aussi dans l'autre sens, si on charge reset.css en premier, et on enlève la dépendance ["theme-reset"] par conséquent
    // wp_enqueue_style('theme-reset', get_template_directory_uri() . "/css/reset.css");
    // wp_enqueue_style('theme-style', get_template_directory_uri() . "/css/style.css");

    add_theme_support('title-tag');
    // permet d'avir un onglet menus dans Apparence dans le BO de WP
    add_theme_support('menus');
}

add_action( 'after_setup_theme', 'charger_styles' );

// On vérifie si la fonction n'existe pas déjà avant de la créer
// Permet d'éviter d'écraser du code
if(!function_exists('apply_nav_menu_item_css')) {
    function apply_nav_menu_item_css($classes) {
        // Le hook s'exécute à chaque création de lien dans le menu
        // $classes: la liste des classes pour la balise 'li' en cours
        //var_dump($classes);
        
        // On écrase $classes avec la classe qu'on souhaite ajouter
        return ['left__nav-item'];
    }
}
add_filter('nav_menu_css_class', 'apply_nav_menu_item_css');

if(!function_exists('apply_nav_menu_link_css')) {
    function apply_nav_menu_link_css($attr) {
        //var_dump($attr);

        // On écrase PAS $attr, on lui ajoute une classe
        $attr['class'] = 'left__nav-link';
        return $attr;
    }
}
add_filter('nav_menu_link_attributes', 'apply_nav_menu_link_css');
