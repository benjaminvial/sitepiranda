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

?>
