<?php

/**
 * Fichier pour l'affichage de la page d'accueil
 * 
 */

get_header(); ?>
<main class="site_main site_main_accueil">
    <section class="vedette">
        <div>
            <?php
            // Récupérer les articles de la catégorie "galerie"
            $galerie_posts = new WP_Query('category_name=galerie');

            // Vérifier s'il y a des articles dans la catégorie "galerie"
            if ($galerie_posts->have_posts()) :
            ?>
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php
                            while ($galerie_posts->have_posts()) : $galerie_posts->the_post();
                            ?>
                                <li class="splide__slide">
                                    <div class="post-content">
                                        <?php the_content(); ?>
                                    </div>
                                </li>
                            <?php
                            endwhile;
                            ?>
                        </ul>
                    </div>

                    <!-- Add the progress bar element -->
                    <div class="my-slider-progress">
                        <div class="my-slider-progress-bar"></div>
                    </div>
                </div>
            <?php
                // Réinitialiser la requête après l'utilisation de WP_Query
                wp_reset_postdata();
            else :
                // Aucun article trouvé dans la catégorie "galerie"
                echo 'Aucun article trouvé dans la catégorie "galerie".';
            endif;
            ?>
        </div>
    </section>
    <section>
        <div>
            <?php
            // Récupérer les articles de la catégorie "galerie"
            $accueil_posts = new WP_Query('category_name=accueil');

            // Vérifier s'il y a des articles dans la catégorie "galerie"
            if ($accueil_posts->have_posts()) :
            ?>
                <?php
                while ($accueil_posts->have_posts()) : $accueil_posts->the_post();
                ?>
                    <?php the_content(); ?>
                <?php
                endwhile;
                ?>
            <?php
                // Réinitialiser la requête après l'utilisation de WP_Query
                wp_reset_postdata();
            else :
                // Aucun article trouvé dans la catégorie "accueil"
                echo 'Aucun article trouvé dans la catégorie "accueil".';
            endif;
            ?>
        </div>
    </section>
</main>
<?php
// Enqueue your JavaScript file only on the front page
wp_enqueue_script('carrousel', get_template_directory_uri() . '/js/carrousel.js', array('jquery'), null, true);
?>
<?php get_footer(); ?>