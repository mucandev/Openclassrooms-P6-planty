<?php
// Action  charger des scripts 
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');  

function theme_enqueue_styles(){
    // Chargement du style.css du thème parent GeneratePress
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du theme.css du thème enfant planty
    wp_enqueue_style('template-planty-style', get_stylesheet_directory_uri() . '/css/templates-planty.css', array(), filemtime(get_stylesheet_directory() . '/css/templates-planty.css'));
}


// afficher l'item n°2 si admin connecté
function wp_filter_menu_for_admin($items, $args) {

    if (is_user_logged_in() && current_user_can('administrator')) {
    
        return $items;
    } else {
        $index = 0;
        foreach ($items as $key => $menu_item) {
            if ($menu_item->menu_item_parent == 0) {
                $index++; // Incrémente l'index pour chaque élément de menu principal
                if ($index == 2) {
                    // Si l'élément est le deuxième élément de menu, supprimez-le
                    unset($items[$key]);
                    break; 
                }
            }
        }
        return $items;
    }
}
add_filter('wp_nav_menu_objects', 'wp_filter_menu_for_admin', 10, 2);
