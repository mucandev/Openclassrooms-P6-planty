<?php
/**
 * Template Name: home-Ct-WA-CT
 */

get_header();
?>
<main  id="main_home">
     <!-- Diviser le contenu de la page en deux parties -->
    <?php
    $content = get_the_content();
    $content_parts = preg_split('/<\s*<!--more\s*-->\s*>/', $content);
    $content_count = count($content_parts);

    if ($content_count > 1) {
        // Afficher la première partie du contenu
        echo $content_parts[0];
        // Afficher la zone de widget
        if (is_active_sidebar('main-widget-area')) {
            echo '<div id="main-widget-content" class="main-widget-content">';
            dynamic_sidebar('main-widget-area');
            echo '</div>';
        }
        // Afficher la deuxième partie du contenu
        echo $content_parts[1];
    } else {
        // Si le contenu ne contient pas de <!--more-->, afficher simplement le contenu
        the_content();
    }
    ?>

 </main>

<?php
get_footer();
