<!DOCTYPE html>

<html lang="fr" xmlns:og="http://ogp.me/ns#"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="author" content="Milan Comajuan Killian claeyssen Benjamin Vial Robin Meunier">
  <meta name="keywords" content="document html5 mmi">
  <meta name="description" content="Document minimal html5 en DUT MMI">
  <!-- Affichage standard sur périphérique mobile pour site adaptatif -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Données Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:locale" content="fr_FR">
  <meta property="og:description" content="Document minimal html5 en DUT MMI">
  <meta property="og:title" content="Document minimal en MMI">
  <meta property="og:site_name" content="Document minimal en MMI">
  <title>François Piranda</title>
<link id="avast_os_ext_custom_font" href="css/header.css" rel="stylesheet" type="text/css">
<link  href="css/footer.css" rel="stylesheet" type="text/css">
<link  href="css/reset.css" rel="stylesheet" type="text/css">
<?php wp_head();?>
</head>
<header>

	    <img class="logopiranda" src="<?php echo get_template_directory_uri();?>/pictures/logo/monogramme.svg" alt="logo piranda"  width=" " height=" ">
		<div class="a">
    	<a  href="about.php" title="A propos de moi">À propos de moi</a>
    	<a  href="inspiration.php" title="Mes inspirations">Inspirations</a>
    	<a  href="oeuvres.php" title="Mes oeuvres">Œuvres</a>
    	<a href="contact.php" title="contact">Contact</a>
		</div>
      <img class="logoa" src="<?php echo get_template_directory_uri();?>/pictures/logo/vimeo.svg" alt="logo vimeo" width="30" height="30">
      <img class="logob" src="<?php echo get_template_directory_uri();?>/pictures/logo/insta.svg" alt="logo instagram" width="30" height="30">
      <img class="logoc" src="<?php echo get_template_directory_uri();?>/pictures/logo/pinterest.svg" alt="logo pinterest" width="30" height="30">

<img class="ecriture" src="pictures/header/Apropos/Titre.svg" alt="ecriture a propos" width="600" height="600">

    <?php wp_page_menu('show_home=1');?>


<h1> <?php bloginfo('name');?> </h1>
<h2><?php bloginfo('description');?><h2>
</header>
