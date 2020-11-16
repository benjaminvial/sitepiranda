<!DOCTYPE html>
<html lang="fr">
<head>.
<meta charset="utf-8"/>
<?php wp_head();?>
</head>
<header>
  <nav id="menuprincipal">
    <ul id="menu">


	    <img class="logopiranda" src="" alt="logo piranda" "width="" height="">
    	<a href="about.php" title="A propos de moi">A propos de moi</a>
    	<a href="inspiration.php" title="Mes inspirations">Mes inspirations</a>
    	<a href="oeuvres.php" title="Mes oeuvres">Mes oeuvres</a>
    	<a href="contact.php" title="contact">CONTACT</a>
		  <img class="logo" src="" alt="logo pinterest" "width="" height="">
      <img class="logo" src="" alt="logo instagram" "width="" height="">
      <img class="logo" src="" alt="logo vimeo" "width="" height="">
  	</ul>


    <?php wp_page_menu('show_home=1');?>
  <nav>
  <aside>
    <?php get_sidebar();?>
  </aside>
<h1> <?php bloginfo('name');?> </h1>
<h2><?php bloginfo('description');?><h2>
</header>
