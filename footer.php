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
    <div class="footer_adresse">
      <p>7230 Bd Maurice-Duplessis, Montréal,</p>
      <p>QC H1E 4A7</p>
      <a href="https://maps.app.goo.gl/new7FC55us7Tuhmq5" target="_blank">map</a>
    </div>
    <div class="footer_heures">
      <?php
      $accueil_posts = new WP_Query('category_name=heures');
      if ($accueil_posts->have_posts()) :
      ?>
        <?php
        while ($accueil_posts->have_posts()) : $accueil_posts->the_post();
        ?>
          <?php the_content(); ?>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
    <div class="footer_menu">
      <?php wp_nav_menu(array("theme_location" => "entete", "container" => "ul", "menu_class" => "menu")) ?>
    </div>
  </div>

</footer>
<!-- GSAP-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<?php wp_footer(); ?>

</body>

</html>