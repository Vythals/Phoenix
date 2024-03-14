<?php

/**
 * Template name: menu
 * 
 */
?>
<?php get_header(); ?>

<main class="site-main">
    <section class="vedette">
        <div class="container-categorie-content">
            <div class="titre-vedette">
                <h1 class="titre-gsap">Nos</h1>
                <h1 class="titre-gsap">Menus à</h1>
                <h1 class="titre-gsap">Découvrir</h1>
                <h3 class="titre-gsap">Savourez l'harmonie des saveurs exquises de notre cuisine.</h3>
            </div>
            <div class="voile-carrou"></div>
            <?php
            $galerie_posts = new WP_Query('category_name=galerie-menu');
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
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>
    <section class="menus">
        <div class="button-menu">
            <a class="fancy" id="menu-emporter-button">
                <span class="top-key"></span>
                <span class="text">Menu à emporter</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
            </a>
            <a class="fancy" id="menu-carte-button">
                <span class="top-key"></span>
                <span class="text">Menu à la carte</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
            </a>
            <a class="fancy" id="menu-volonte-button">
                <span class="top-key"></span>
                <span class="text">Menu à volonté</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
            </a>
        </div>
        <section class="menu-emporter">
            <h2 class="gros-titre">Menu à Emporter</h2>
            <div class="chaud-emporter nourriture">
                <div class="spikesDeux"></div>
                <h2 class="gros-titre">Cuisine Szechuannaise</h2>
                <div class="categorie-menu combo">
                    <h2 class="titre-menu-categorie-gsap">Spéciaux</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-combo-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>

                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,combo" relation="AND" exclude_categories="sushi" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu soupes">
                    <h2 class="titre-menu-categorie-gsap">Soupes</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-soup-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,soupes" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu entrees">
                    <h2 class="titre-menu-categorie-gsap">Hors-d'œuvres</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-entrees-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,entrees" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu porc">
                    <h2 class="titre-menu-categorie-gsap">Porc</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-porc-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,porc" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu fruits-de-mer">
                    <h2 class="titre-menu-categorie-gsap">Fruits de mer</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-fruits-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,fruits-de-mer" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu boeuf">
                    <h2 class="titre-menu-categorie-gsap">Bœuf</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-boeuf-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,boeuf" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu poulet">
                    <h2 class="titre-menu-categorie-gsap">Poulet</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-poulet-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,poulet" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu canard">
                    <h2 class="titre-menu-categorie-gsap">1/2 Canard</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-canard-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,canard" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu agneau">
                    <h2 class="titre-menu-categorie-gsap">Agneau</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-agneau-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,agneau" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu legume">
                    <h2 class="titre-menu-categorie-gsap">Légumes</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-legume-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,legume" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu riznouilles">
                    <h2 class="titre-menu-categorie-gsap">Riz et nouilles</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-riz-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,riznouilles" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="spikes"></div>
            </div>
            <?php //--------------------------------------------------------Sushi Memporter-------------------------------
            ?>
            <div class="sushi-emporter nourriture">
                <div class="spikesDeux"></div>
                <h2 class="gros-titre">Sushi</h2>
                <div class="categorie-menu combo">
                    <h2 class="titre-menu-categorie-gsap">Spéciaux</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-combo-sushi-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,combo-sushi" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu soupes">
                    <h2 class="titre-menu-categorie-gsap">Nigiris et Sashimi</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-nigiri-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,nigiris" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu entrees">
                    <h2 class="titre-menu-categorie-gsap">Hosomakis</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-hosomakis-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,hosomakis" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu porc">
                    <h2 class="titre-menu-categorie-gsap">Makis</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-makis-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,makis" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu fruits-de-mer">
                    <h2 class="titre-menu-categorie-gsap">Futomakis</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-futomakis-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-emporter,futomakis" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="spikes"></div>
            </div>
        </section>
        <?php //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!MENU-À-LA-CARTE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        ?>
        <section class="menu-carte">
            <h2 class="gros-titre">Menu à la carte</h2>
            <div class="chaud-carte nourriture">
                <div class="spikesDeux"></div>
                <h2 class="gros-titre">Cuisine Szechuannaise</h2>
                <div class="categorie-menu combo">
                    <h2 class="titre-menu-categorie-gsap">Spéciaux</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-combo-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>

                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,combo" relation="AND" exclude_categories="sushi" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu soupes">
                    <h2 class="titre-menu-categorie-gsap">Soupes</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-soup-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,soupes" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu entrees">
                    <h2 class="titre-menu-categorie-gsap">Hors-d'œuvres</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-entrees-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,entrees" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu porc">
                    <h2 class="titre-menu-categorie-gsap">Porc</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-porc-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,porc" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu fruits-de-mer">
                    <h2 class="titre-menu-categorie-gsap">Fruits de mer</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-fruits-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,fruits-de-mer" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu boeuf">
                    <h2 class="titre-menu-categorie-gsap">Bœuf</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-boeuf-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,boeuf" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu poulet">
                    <h2 class="titre-menu-categorie-gsap">Poulet</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-poulet-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,poulet" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu canard">
                    <h2 class="titre-menu-categorie-gsap">1/2 Canard</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-canard-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,canard" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu agneau">
                    <h2 class="titre-menu-categorie-gsap">Agneau</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-agneau-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,agneau" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu legume">
                    <h2 class="titre-menu-categorie-gsap">Légumes</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-legume-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,legume" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu riznouilles">
                    <h2 class="titre-menu-categorie-gsap">Riz et nouilles</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-riz-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,riznouilles" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="spikes"></div>
            </div>
            <?php //--------------------------------------------------------Sushi la-carte-------------------------------
            ?>
            <div class="sushi-carte nourriture">
                <div class="spikesDeux"></div>
                <h2 class="gros-titre">Sushi</h2>
                <div class="categorie-menu combo">
                    <h2 class="titre-menu-categorie-gsap">Spéciaux</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-combo-sushi-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,combo-sushi" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu soupes">
                    <h2 class="titre-menu-categorie-gsap">Nigiris et Sashimi</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-nigiri-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,nigiris" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu entrees">
                    <h2 class="titre-menu-categorie-gsap">Hosomakis</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-hosomakis-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,hosomakis" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu porc">
                    <h2 class="titre-menu-categorie-gsap">Makis</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-makis-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,makis" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu fruits-de-mer">
                    <h2 class="titre-menu-categorie-gsap">Futomakis</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-futomakis-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-la-carte,futomakis" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="spikes"></div>
            </div>
        </section>
        <?php //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!MENU-À-Volonté!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        ?>
        <section class="menu-volonte">
            <h2 class="gros-titre">Menu à Volonté</h2>
            <div class="chaud-volonte nourriture">
                <div class="spikesDeux"></div>
                <h2 class="gros-titre">Cuisine Szechuannaise</h2>
                <div class="categorie-menu information-volonte">
                    <div class="container-categorie-content">
                        <?php
                        $args = array(
                            'category_name' => 'menu-a-volonte',
                            'category__not_in' => get_cat_ID('nourriture'),
                            'order' => 'ASC', // Inverser l'ordre
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                the_content();
                            endwhile;
                            wp_reset_postdata();
                        else :
                            // Aucun article trouvé
                            echo 'Aucun article trouvé.';
                        endif;
                        ?>

                    </div>
                </div>
                <div class="categorie-menu soupes">
                    <h2 class="titre-menu-categorie-gsap">Soupes</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-soup-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-volonte,soupes" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu entrees">
                    <h2 class="titre-menu-categorie-gsap">Hors-d'œuvres</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-entrees-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-volonte,entrees" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu fruits-de-mer">
                    <h2 class="titre-menu-categorie-gsap">Fruits de mer</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-fruits-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-volonte,fruits-de-mer" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu boeuf">
                    <h2 class="titre-menu-categorie-gsap">Bœuf</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-boeuf-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-volonte,boeuf" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu poulet">
                    <h2 class="titre-menu-categorie-gsap">Poulet</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-poulet-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-volonte,poulet" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu legume">
                    <h2 class="titre-menu-categorie-gsap">Légumes</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-legume-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-volonte,legume" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu riznouilles">
                    <h2 class="titre-menu-categorie-gsap">Riz et nouilles</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-riz-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-volonte,riznouilles" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="spikes"></div>
            </div>
            <?php //--------------------------------------------------------Sushi Mvolonte-------------------------------
            ?>
            <div class="sushi-volonte nourriture">
                <div class="spikesDeux"></div>
                <h2 class="gros-titre">Sushi</h2>
                <div class="categorie-menu soupes">
                    <h2 class="titre-menu-categorie-gsap">Nigiris et Sashimi</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-nigiri-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-volonte,nigiris" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu entrees">
                    <h2 class="titre-menu-categorie-gsap">Hosomakis</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-hosomakis-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-volonte,hosomakis" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu porc">
                    <h2 class="titre-menu-categorie-gsap">Makis</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-makis-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-volonte,makis" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="categorie-menu fruits-de-mer">
                    <h2 class="titre-menu-categorie-gsap">Futomakis</h2>
                    <div class="container-categorie-content">
                        <?php
                        $menu_soup_photo_post = get_page_by_path('menu-futomakis-photo', OBJECT, 'post');
                        $featured_image_id = get_post_thumbnail_id($menu_soup_photo_post->ID);
                        $image_size = 'medium';
                        $featured_image_html = wp_get_attachment_image($featured_image_id, $image_size, false, array('loading' => 'lazy', 'class' => 'images-menu'));
                        echo '<div class="container-images-menu">' . $featured_image_html . '</div>';
                        ?>
                        <?php
                        echo do_shortcode('[custom_category_posts categories="menu-a-volonte,futomakis" relation="AND" exclude_categories="" exclude_relation="OR" posts_per_page="-1" orderby="date" order="ASC"]');
                        ?>
                    </div>
                </div>
                <div class="spikes"></div>
            </div>
        </section>
    </section>
</main>
<?php get_footer(); ?>