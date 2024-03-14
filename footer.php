<?php

/**
 * Fichier pour l'affichage du pied de page du site
 * 
 */
?>
<footer class="site_pied_page">
  <div class="contenu_footer">
    <div class="footer_heures">
      <?php
      $accueil_posts = new WP_Query('category_name=heures');
      if ($accueil_posts->have_posts()) :
      ?>
        <?php
        while ($accueil_posts->have_posts()) : $accueil_posts->the_post();
        ?>
          <div class="heures">
            <div class="container-heures">
              <h2 class="gsap-heures">HORAIRES D'OUVERTURE</h2>
              <div class="gsap-heures"><?php the_content(); ?></div>
              <?php
              $image_url1 = get_template_directory_uri() . '/images/carotte.png';
              $image_url2 = get_template_directory_uri() . '/images/echalotte.png';
              $image_url3 = get_template_directory_uri() . '/images/oeuf.png';
              $image_url4 = get_template_directory_uri() . '/images/piments.png';
              $image_url5 = get_template_directory_uri() . '/images/soy.png';
              $image_url6 = get_template_directory_uri() . '/images/tete_ail.png';
              ?>
              <img class="image-parallaxe carotte" src="<?php echo $image_url1; ?>" alt="carotte" loading="lazy">
              <img class="image-parallaxe echalotte" src="<?php echo $image_url2; ?>" alt="echalotte" loading="lazy">
              <img class="image-parallaxe oeuf" src="<?php echo $image_url3; ?>" alt="oeuf" loading="lazy">
              <img class="image-parallaxe piments" src="<?php echo $image_url4; ?>" alt="piments" loading="lazy">
              <img class="image-parallaxe soy" src="<?php echo $image_url5; ?>" alt="soy" loading="lazy">
              <img class="image-parallaxe tete-ail" src="<?php echo $image_url6; ?>" alt="tete_ail" loading="lazy">
            </div>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
    <div class="footer-low">
      <div class="footer_nous">
        <h2 class="gsap-footer">Phoenix Oriental</h2>
        <p class="gsap-footer">Fine Cuisine Szechuannaise</p>
        <p class="gsap-footer">Et Sushi</p>
        <p class="gsap-footer">À Volonté !</p>
      </div>
      <hr class="gsap-footer-hr">
      <div class="footer_adresse">
        <a href="https://maps.app.goo.gl/new7FC55us7Tuhmq5" target="_blank">
          <p class="gsap-footer-adress">7230 Bd Maurice-Duplessis, Montréal,</p>
        </a>
        <a href="https://maps.app.goo.gl/new7FC55us7Tuhmq5" target="_blank">
          <p class="gsap-footer-adress">QC H1E 4A7</p>
        </a>
      </div>
      <hr class="gsap-footer-hr">
      <div class="footer_mentions">
        <?php
        wp_nav_menu(array(
          "theme_location" => "pied",
          "menu_class"     => "menu",
          "link_class"     => "underline gsap-footer-mentions"
        ));
        ?>
      </div>
    </div>
  </div>

</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

<?php wp_footer(); ?>

</body>

</html>