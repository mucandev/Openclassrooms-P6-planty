<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent GeneratePress
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du theme.css du thème enfant planty
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    // Chargement du /css/widgets/image-titre-widget.css pour widget vignette
    wp_enqueue_style('image-titre-widget', get_stylesheet_directory_uri() . '/css/image-titre-widget.css', array(), filemtime(get_stylesheet_directory() . '/css/image-titre-widget.css'));
}
    

/* CHARGEMENT DES WIDGETS */
require_once(__DIR__ . '/widgets/ImageTitreWidget.php');

function register_widgets()
{
    //On enregistre le widget avec la class Image_Titre_Widget
    register_widget('Image_Titre_Widget');
}
//On demander à wordpress de charger des widget selon la fonction register_widgets()
add_action('widgets_init', 'register_widgets');


/* NOUVELLE ZONE DE WIDGETS */
function main_widgets_init() {
 
    register_sidebar( array(
   
    'name' => __('zone de widget main','text-domain'),
    'id' => 'main-widget-area',
    'description'   => __( 'Zone de widget pour le thème enfant', 'text-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="mwa-title">',
    'after_title' => '</div>',
    ) );
   }
   
   add_action( 'widgets_init', 'main_widgets_init' );






// Gestion des menus
// function enregistre_mon_menu() {
//     register_nav_menu( 'menu_header', __( 'Menu header' ) );
// }
// add_action( 'init', 'enregistre_mon_menu' );
