<!DOCTYPE html>
<html>
<head>
  <link  href="css/front-page.css" rel="stylesheet" type="text/css">
 <?php wp_head();?>
</head>
<body>
  <div class="wrap">
    <div class="logotype">
      <img src="<?php echo get_template_directory_uri();?>/pictures/logo/monogramme.svg" alt="Logo François Piranda">
      <div class="social_media">
        <img src="<?php echo get_template_directory_uri();?>/pictures/logo/vimeo.svg" alt="Logo Vimeo">
        <img src="<?php echo get_template_directory_uri();?>/pictures/logo/insta.svg" alt="Logo Instagram">
        <img src="<?php echo get_template_directory_uri();?>/pictures/logo/pinterest.svg" alt="Logo Pinterest">
      </div>
    </div>

    <div class="title">
      <img src="<?php echo get_template_directory_uri();?>/pictures/header/texte_front_page/francois piranda.svg" alt="Ecriture François Piranda">
      <p>artiste</p>
      <nav>
        <a href="#">À propos de moi </a>
        <a href="#">Inspirations</a>
        <a href="#">Œuvres</a>
        <a href="#">Contact</a>
      </nav>
    </div>
  </div>
</body>

</html>
