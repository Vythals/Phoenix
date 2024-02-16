<?php

/**
 * Fichier pour l'affichage de la page d'accueil
 * 
 */

get_header(); ?>
<main class="site-main site_main_accueil">
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
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </li>
                            <?php
                            endwhile;
                            ?>
                        </ul>
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

    <section class="accueil-intro">
        <div class="accueil-desc">
            <?php
            // Définir les arguments de la requête pour les articles des catégories "Accueil" et "Texte"
            $args = array(
                'category__and' => array(
                    get_cat_ID('accueil'),
                    get_cat_ID('texte')
                ),
            );
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post();
            ?>
                <div class="accueil-desc-texte">
                    <?php the_content(); ?>
                    <a href="<?php echo get_permalink(get_page_by_path('menu')); ?>">Découvrir les Menus</a>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>

            <?php
            // Définir les arguments de la requête pour les articles des catégories "Accueil" et "Texte"
            $args = array(
                'category__and' => array(
                    get_cat_ID('accueil'),
                    get_cat_ID('image1')
                ),
            );
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post();
            ?>
                <div class="image-accueil-desc">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </section>
</main>
<?php
// Enqueue your JavaScript file only on the front page
wp_enqueue_script('carrousel', get_template_directory_uri() . '/js/carrousel.js', array('jquery'), null, true);
?>
<?php get_footer(); ?>