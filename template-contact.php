<?php

/**
 * Template name: contact
 * 
 */
?>
<?php get_header(); ?>

<main class="site-main main-contact">
    <section class="vedette">
        <div class="container-categorie-content">
            <div class="titre-vedette">
                <h1 class="titre-gsap">Coordonnées</h1>
                <h1 class="titre-gsap">Horaires d'ouverture</h1>
                <h1 class="titre-gsap">Et Localisation</h1>
            </div>
            <div class="voile-carrou"></div>
            <?php
            // Récupérer les articles de la catégorie "galerie"
            $galerie_posts_contact = new WP_Query('category_name=galerie-contact');

            // Vérifier s'il y a des articles dans la catégorie "galerie"
            if ($galerie_posts_contact->have_posts()) :
            ?>
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php
                            while ($galerie_posts_contact->have_posts()) : $galerie_posts_contact->the_post();
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
    <section>
        <div>
            <h2>Contact</h2>
            <div>
                <h4>Adresse : <a class="underline" href="https://maps.app.goo.gl/new7FC55us7Tuhmq5" target="_blank">7230 Bd Maurice-Duplessis, Montréal, QC H1E 4A7</a></h4>
                <h4>Téléphone : <a class="underline" href="tel: 514-903-3888" target="_blank">(514)-903-3888</a></h4>
            </div>
        </div>
    </section>
    <section>
        <?php
        $accueil_posts = new WP_Query('category_name=heures');
        if ($accueil_posts->have_posts()) :
        ?>
            <?php
            while ($accueil_posts->have_posts()) : $accueil_posts->the_post();
            ?>
                <div class="heures-contact">
                    <div class="container-heures-contact">
                        <h2 class="gsap-heures-contact">HORAIRES D'OUVERTURE</h2>
                        <?php the_content(); ?>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </section>
    <section>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2790.382743035606!2d-73.60496792336332!3d45.62304692282557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91fc5ee5a2fed%3A0x2dbc7f9cf5d50c32!2sRestaurant%20Phoenix%20Oriental!5e0!3m2!1sfr!2sca!4v1710426670554!5m2!1sfr!2sca" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</main>

<?php get_footer(); ?>