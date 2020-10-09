<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8"/>
<?php wp_head();?>
</head>
<header>
  <nav id="menuprincipal">
    <?php wp_page_menu('show_home=1');?>
  <nav>
  <aside>
    <?php get_sidebar();?>
  </aside>
<h1> <?php bloginfo('name');?> </h1>
<h2><?php bloginfo('description');?><h2>
</header>
