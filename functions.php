<?php
//ajout du title
function ajout_titre(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme','ajout_titre');

//ajout du style et du js
function ajout_style() {
  wp_enqueue_style('general',get_template_directory_uri().'css/style.css');
}
add_action('wp_enqueue_scripts','ajout_style');

function custom_theme_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('footer-style', get_template_directory_uri().'/css/footer.css');
    wp_enqueue_style('header-style', get_template_directory_uri().'/css/header.css');
    wp_enqueue_style('reset-style', get_template_directory_uri().'/css/reset.css');
    wp_enqueue_style('oeuvres-style', get_template_directory_uri().'/css/oeuvres.css');

    if(is_page('inspirations')){
    wp_enqueue_style('page-inspirations', get_template_directory_uri().'/css/inspirations.css');
  }

    if(is_page('themes')){
      wp_enqueue_style('page-themes-style', get_template_directory_uri().'/css/themes.css');
    }

    //si on est sur la home page
    if(is_home('')){
    //on charge le style front-page.css
      wp_enqueue_style('front-page-style', get_template_directory_uri().'/css/front-page.css');
    }

    if(is_page('contact')){
      wp_enqueue_style('contact', get_template_directory_uri().'/css/contact.css');
    }
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets');
?>
