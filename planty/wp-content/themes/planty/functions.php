<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent 
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du theme.css du thème enfant planty
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


/*chargement des widgets*/


/*SHORTCODES*/
add_shortcode( 'vignette-gout', 'vignette_gout_func');
// Je génère le html retourné par mon shortcode
function vignette_gout_func($atts)
{
    //Je récupère les attributs mis sur le shortcode
    $atts = shortcode_atts(array(
        'src' => '',
        'titre' => 'Titre'
    ), $atts, 'vignette-gout');

    //Je commence à récupérer le flux d'information
    ob_start();

    if ($atts['src'] != "") {
        ?>

        <div class="vignette-gout" style="background-image: url(<?= $atts['src'] ?>)">
            <h3 class="titre"><?= $atts['titre'] ?></h3>
        </div>

        <?php
    }

    //J'arrête de récupérer le flux d'information et le stock dans la fonction $output
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
