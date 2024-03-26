<?php
/**
 * Template Name: home-WA-Ct
 */

get_header();
?>
<main  id="main_home">
        <!-- ajout de ma nouvelle widget area -->
        <?php 
        // Vérifier si la zone de widget est active
        if ( is_active_sidebar( 'main-widget-area' ) ) {
            // Ouvrir un conteneur pour la zone de widget
            echo '<div id="main-widget-content" class="main-widget-content">';
            // Afficher la zone de widget
            dynamic_sidebar( 'main-widget-area' );
            // Fermer le conteneur de la zone de widget
            echo '</div>';
        }
        ?>

            <!-- AFFICHER LE CONTENU DE LA PAGE-->
            <?php the_content();?>


 </main>

<?php
get_footer();
