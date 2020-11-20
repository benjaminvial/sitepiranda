<footer>
  <div class="contact">
    <p>Envie de suivre mes actualités? <a href="#"> Contactez-moi!</a> <p>
  </div>
  <div class="wrap">
    <div class="info">
      <div>
          <img src="<?php echo get_template_directory_uri();?>/pictures/logo/menu.svg" alt="Logo Menu">
          <h3>menu</h3>
          <a href="">A propos</a>
          <a href="">Inspirations</a>
          <a href="">Oeuvres</a>
          <a href="">Contact</a>
      </div>

        <div>
          <img src="<?php echo get_template_directory_uri();?>/pictures/logo/info.svg" alt="Logo Informations">
          <h3>informations</h3>
          <p>contact@francois-piranda.art</p>
          <p>06 77 65 97 77</p>
        </div>

        <div>
          <img src="<?php echo get_template_directory_uri();?>/pictures/logo/email.svg" alt="logo enveloppe">
          <h3>newsletter</h3>
          <p>Pour rester au courant de mes projets !</p>
          <?php echo do_shortcode('[sibwp_form id=2]'); ?>
        </div>

    </div>

    <div class="social_media">
        <p>Copyright © 2020. Tous droits réservés.</p>
      <div>
        <img src="<?php echo get_template_directory_uri();?>/pictures/logo/pinterest.svg" alt="Logo Pinterest">
        <img src="<?php echo get_template_directory_uri();?>/pictures/logo/insta.svg" alt="Logo Instagram">
        <img src="<?php echo get_template_directory_uri();?>/pictures/logo/vimeo.svg" alt="Logo Vimeo">
      </div>
    </div>

        <span>Mentions légales - Crédits</span>

  </div>
  <?php wp_footer();?>
</footer>
</html>
