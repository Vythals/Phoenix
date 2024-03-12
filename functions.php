<?php
/* ----------------------------------------------------------------------------- Lier les styles */

if (!defined('_S_VERSION')) {
    // Remplacer le numéro de la version à chaque publication.
    define('_S_VERSION', '1.0.0');
}

function ajouter_styles()
{

    wp_enqueue_style(
        'style-principale',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'ajouter_styles');
/*------------------------------------------------------------------------------ add_theme_support() */
add_theme_support('title-tag');
add_theme_support(
    'custom-logo',
    array(
        'height' => 50,
        'width'  => 50,
    )
);
add_theme_support('post-thumbnails');
add_theme_support('custom-background');
function register_my_menus()
{
    register_nav_menus(array(
        'entete' => __('Menu Entête'),
        'pied'   => __('Menu Pied'),
    ));
}

add_action('init', 'register_my_menus');
function add_menu_link_class($atts, $item, $args)
{
    if ($args->theme_location == 'pied') {
        $atts['class'] = 'underline gsap-footer-mentions';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 10, 3);
/*------------------------------------------------------------------------------ tout les scipts */
function theme_enqueue_scripts()
{
    // Charger le fichier JavaScript du menu burger
    wp_enqueue_script('constant-script', get_template_directory_uri() . '/js/constant.js', array('jquery'), null, true);
    if (is_page_template('template-menu.php')) {
        wp_enqueue_script('page-menus', get_template_directory_uri() . '/js/page-menus.js', array('jquery'), null, true);
    }
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

///////////////////////////////////////////SHORTCODE POUR LE MENU/////////////////////////
function custom_category_posts_shortcode($atts)
{
    $atts = shortcode_atts(
        array(
            'categories' => '',
            'relation' => 'AND',
            'exclude_categories' => '',
            'exclude_relation' => 'AND',
            'posts_per_page' => -1,
            'orderby' => 'date', // Nouveau paramètre pour l'ordre
            'order' => 'DESC',   // Nouveau paramètre pour la direction de l'ordre
        ),
        $atts,
        'custom_category_posts'
    );

    $categories = explode(',', $atts['categories']);
    $exclude_categories = explode(',', $atts['exclude_categories']);

    $tax_query = array(
        'relation' => $atts['relation'],
    );

    // Ajouter la condition pour les catégories spécifiées
    if ($atts['categories'] !== '') {
        $tax_query[] = array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => $categories,
            'operator' => ($atts['relation'] === 'OR') ? 'IN' : 'AND',
        );
    }

    // Ajouter la condition pour les catégories à exclure
    if ($atts['exclude_categories'] !== '') {
        $tax_query[] = array(
            'relation' => $atts['exclude_relation'],
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $exclude_categories,
                'operator' => 'NOT IN',
            ),
        );
    }

    $args = array(
        'tax_query' => $tax_query,
        'posts_per_page' => $atts['posts_per_page'],
        'orderby' => $atts['orderby'],
        'order' => $atts['order'],
    );

    $custom_query = new WP_Query($args);

    ob_start();

    if ($custom_query->have_posts()) :
?><div class="menu-contenu"><?php
                            while ($custom_query->have_posts()) : $custom_query->the_post();
                            ?>
                <article class="article-menu">
                    <h5 class="article-titre"><?php the_title(); ?></h5>
                    <div class="article-contenu">
                        <?php the_content(); ?>
                    </div>
                    <?php
                                // Récupérer la valeur du champ ACF et l'afficher
                                $acf_value = get_field('prix'); // Remplacez 'nom_du_champ_acf' par le nom réel de votre champ ACF
                                if ($acf_value) {
                                    echo '<p class="acf-content">' . esc_html($acf_value) . '</p>';
                                }
                    ?>
                </article>
                <hr class="hr-article">
            <?php
                            endwhile;
            ?>
        </div><?php
                wp_reset_postdata();
            else :
                echo 'Aucun article trouvé.';
            endif;

            $output = ob_get_clean();

            return $output;
        }

        add_shortcode('custom_category_posts', 'custom_category_posts_shortcode');
