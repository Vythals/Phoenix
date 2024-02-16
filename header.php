<!DOCTYPE html>
<html lang="fr-ca">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap">
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" integrity="sha256-FZsW7H2V5X9TGinSjjwYJ419Xka27I8XPDmWryGlWtw=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" integrity="sha256-5uKiXEwbaQh9cgd2/5Vp6WmMnsUr3VZZw0a8rKnOKNU=" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>

<body>

  <header id="site-navigation" class="main-navigation">
    <div class="container">
      <div class="navbar">
        <?php
        // Vérifier si la fonction get_custom_logo est disponible (à partir de WordPress 4.5)
        if (function_exists('the_custom_logo')) {
          $custom_logo_id = get_theme_mod('custom_logo');
          $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
        ?>
          <div class="site-logo">
          <?php
          if ($custom_logo_url) {
            echo '<a href="' . esc_url(home_url('/')) . '" rel="home"><img src="' . esc_url($custom_logo_url) . '" alt="' . get_bloginfo('name') . '"></a>';
          } else {
            // Si le logo n'est pas défini, affiche le nom du site comme texte
            echo '<a href="' . esc_url(home_url('/')) . '" rel="home">' . get_bloginfo('name') . '</a>';
          }
        }
          ?>
          </div>
          <div class="meu-toggle">
            <div id="menu-toggle-btn">
              <span></span>
            </div>
          </div>
      </div>
    </div>

    <div class="nav-container">
      <div class="nav-bg">
        <div class="nav-container-bgg">
          <div class="bgg-patern"></div>
        </div>
        <div class="nav-container-bgd"></div>
      </div>
      <div class="nav">
        <div class="col flex">
          <div class="nav-logo">
            <?php
            echo '<a class="underline" href="' . esc_url(home_url('/')) . '" rel="home">' . get_bloginfo('name') . '</a>';
            ?>
          </div>
          <div class="nav-socials">
            <a class="underline" href="https://www.ubereats.com/ca/store/phoenix-oriental/31VXuJFhSTaseiLTJjfoIQ" target="_blank">Uber Eats</a>
            <a class="underline" href="https://www.skipthedishes.com/phoenix-oriental" target="_blank">SkipTheDishes</a>
            <a class="underline" href="https://www.doordash.com/en-CA/store/phoenix-oriental-montr%C3%A9al-23514193/" target="_blank">DoorDash</a>
          </div>
        </div>
        <div class="col">
          <?php
          $menu_name = 'entete';
          $menu_items = wp_get_nav_menu_items($menu_name);

          if (empty($menu_items)) {
            echo '<p>Aucun élément de menu trouvé.</p>';
          } else {
            foreach ($menu_items as $item) {
              $thumbnail_id = get_post_thumbnail_id($item->object_id);
              $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail', true)[0];

              echo '<div class="nav-link">';
              echo '<a href="' . esc_url($item->url) . '" class="lien' . esc_attr($item->menu_order) . ' underline">' . esc_html($item->title) . '</a>';

              // Vérifiez si une image mise en avant est définie
              if ($thumbnail_id) {
                echo '<div class="nav-link-img"><img class="img-menu-burger" src="' . esc_url($thumbnail_url) . '" alt="' . esc_attr($item->title) . '" class="thumbnail-image" /></div>';
              }

              echo '<div class="nav-item-wrapper"></div>';
              echo '</div>';
            }
          }
          ?>


        </div>



        <div class="nav-footer">
          <div>
            <a class="underline" href="https://maps.app.goo.gl/new7FC55us7Tuhmq5" target="_blank">7230 Bd Maurice-Duplessis, Montréal, QC H1E 4A7</a>
          </div>
          <div>
            <a class="underline" href="tel: 514-903-3888" target="_blank">(514)-903-3888</a>
          </div>
        </div>
      </div>
    </div><?php // nav-container
          ?>
    </div>
  </header>