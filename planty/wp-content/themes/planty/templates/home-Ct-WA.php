<?php
/**
 * Template Name: home-Ct-WA
 */

get_header();
?>
<main  id="main_home">
            <!-- AFFICHER LE CONTENU DE LA PAGE-->
            <?php the_content();?>

        <!-- ajout de ma nouvelle widget area -->
        <?php if ( is_active_sidebar( 'main-widget-area' ) ) : ?>
            <div id="main-widget-area" class="main-widget-content" role="complementary">
            <?php dynamic_sidebar( 'main-widget-area' ); ?>
            </div>
        <?php endif; ?>
        <!-- fin nouvelle widget area -->  

 </main>

<?php
get_footer();
