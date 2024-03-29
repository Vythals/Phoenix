<?php

/**
 * Fichier pour l'affichage de la page d'accueil
 * 
 */

get_header(); ?>
<main class="site-main site_main_accueil">
    <section class="accueil-vedette">
        <div>
            <div class="ga-1 groupe-top">
                <div class="texte-vedette-intro">
                    <div class="texte-un">
                        <div class="mot-gsap">
                            <h1 class="lettre-gsap">P</h1>
                            <h1 class="lettre-gsap">h</h1>
                            <h1 class="lettre-gsap">o</h1>
                            <h1 class="lettre-gsap">e</h1>
                            <h1 class="lettre-gsap">n</h1>
                            <h1 class="lettre-gsap">i</h1>
                            <h1 class="lettre-gsap">x</h1>
                        </div>
                        <div class="mot-gsap">
                            <h1 class="lettre-gsap">O</h1>
                            <h1 class="lettre-gsap">r</h1>
                            <h1 class="lettre-gsap">i</h1>
                            <h1 class="lettre-gsap">e</h1>
                            <h1 class="lettre-gsap">n</h1>
                            <h1 class="lettre-gsap">t</h1>
                            <h1 class="lettre-gsap">a</h1>
                            <h1 class="lettre-gsap">l</h1>
                        </div>
                    </div>
                </div>
                <div class="image-un">
                    <?php
                    $menu_soup_photo_post = get_page_by_path('accueil-image-un', OBJECT, 'post');
                    $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                    $image_size = 'large';
                    $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-accueil'));
                    echo '<div class="container-images-accueil img-accueil-un">' . $featured_image_html . '</div>';
                    ?>
                </div>
                <p class="texte-fp-un">Une fusion parfaite de traditions culinaires et d'innovation audacieuse.</p>
            </div>
            <div>
                <h4 class="scroll">Scroll....................</h4>
            </div>
            <div class="ga-1 vedette-block-gauche">
                <div class="img-g">
                    <?php
                    $menu_soup_photo_post = get_page_by_path('accueil-image-riz', OBJECT, 'post');
                    $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                    $image_size = 'large';
                    $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-accueil'));
                    echo '<div class="container-images-accueil img-accueil-deux">' . $featured_image_html . '</div>';
                    ?>
                </div>
                <h2 class="texte-fp-deux">L'art de la dégustation</h2>
                <p class="texte-fp-deux">Explorez notre univers culinaire unique.</p>
            </div>
            <div class="ga-1 vedette-block-droit">
                <p class="texte-fp-trois">Succombez à notre ambiance chaleureuse et dégustez des moments inoubliables.</p>
                <div class="img-d">
                    <?php
                    $menu_soup_photo_post = get_page_by_path('accueil-image-deux', OBJECT, 'post');
                    $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                    $image_size = 'large';
                    $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-accueil'));
                    echo '<div class="container-images-accueil img-accueil-trois">' . $featured_image_html . '</div>';
                    ?>
                </div>
            </div>
            <div>
                <h4 class="fleche-bas">Continuer....................</h4>
            </div>
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
                    <a class="fancy" href="<?php echo get_permalink(get_page_by_path('menu')); ?>">
                        <span class="top-key"></span>
                        <span class="text">Découvrir les Menus</span>
                        <span class="bottom-key-1"></span>
                        <span class="bottom-key-2"></span>
                    </a>
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
                <div class="img-section-2">
                    <div class="image-accueil-desc">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>