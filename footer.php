<?php

/**
 * Fichier pour l'affichage du pied de page du site
 * 
 */
?>
<footer class="site_pied_page">
  <div class="contenu_footer">
    <div class="footer_nous">
      <h2>Phoenix Oriental</h2>
      <p>Fine Cuisine Szechuannaise</p>
      <p>Sushi</p>
      <p>À Volonté !</p>
    </div>
    <div class="footer_menu">
      <?php wp_nav_menu(array("theme_location" => "entete", "container" => "ul", "menu_class" => "menu")) ?>
    </div>
    <div class="footer_adresse">
      <a href="https://maps.app.goo.gl/new7FC55us7Tuhmq5" target="_blank">
        <p>7230 Bd Maurice-Duplessis, Montréal,</p>
      </a>
      <a href="https://maps.app.goo.gl/new7FC55us7Tuhmq5" target="_blank">
        <p>QC H1E 4A7</p>
      </a>
    </div>
    <div class="footer_heures">
      <div class="parallaxe">
        <div class="image-parallaxe"><img src="/Phoenix/wp-content/themes/Phoenix/images/ail.png" alt="ail" loading="lazy"></div>
        <div class="image-parallaxe"><img src="/Phoenix/wp-content/themes/Phoenix/images/carotte.png" alt="carotte" loading="lazy"></div>
        <div class="image-parallaxe"><img src="/Phoenix/wp-content/themes/Phoenix/images/echalotte.png" alt="echalotte" loading="lazy"></div>
        <div class="image-parallaxe"><img src="/Phoenix/wp-content/themes/Phoenix/images/oeuf.png" alt="oeuf" loading="lazy"></div>
        <div class="image-parallaxe"><img src="/Phoenix/wp-content/themes/Phoenix/images/piments.png" alt="piments" loading="lazy"></div>
        <div class="image-parallaxe"><img src="/Phoenix/wp-content/themes/Phoenix/images/poulet.png" alt="poulet" loading="lazy"></div>
        <div class="image-parallaxe"><img src="/Phoenix/wp-content/themes/Phoenix/images/soy.png" alt="soy" loading="lazy"></div>
        <div class="image-parallaxe"><img src="/Phoenix/wp-content/themes/Phoenix/images/tete_ail.png" alt="tete_ail" loading="lazy"></div>
      </div>
      <?php
      $accueil_posts = new WP_Query('category_name=heures');
      if ($accueil_posts->have_posts()) :
      ?>
        <?php
        while ($accueil_posts->have_posts()) : $accueil_posts->the_post();
        ?>
          <div class="heures">
            <div class="container-heures">
              <h2>HORAIRES D'OUVERTURE</h2>
              <?php the_content(); ?>
            </div>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>

</footer>
<!-- GSAP-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<?php wp_footer(); ?>

</body>

</html>