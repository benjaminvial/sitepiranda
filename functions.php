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
    wp_enqueue_style('footer-responsive', get_template_directory_uri().'/css/footer_responsive.css');
    wp_enqueue_style('header-responsive', get_template_directory_uri().'/css/header_responsive.css');
    //si on est sur la page theme
    if(is_page('inspirations')){
    //on charge le style themes.css
    wp_enqueue_style('page-inspirations', get_template_directory_uri().'/css/inspirations.css');
  }

    //si on est sur la page theme
    if(is_page('themes')){
    //on charge le style themes.css
      wp_enqueue_style('page-themes-style', get_template_directory_uri().'/css/themes.css');
    }

    //si on est sur la home page
    if(is_home('')){
    //on charge le style front-page.css
      wp_enqueue_style('front-page-style', get_template_directory_uri().'/css/front-page.css');
    }
    //si on est sur la page contact
    if(is_page('contact')){
    //on charge le style contact.css
      wp_enqueue_style('contact', get_template_directory_uri().'/css/contact.css');
    }
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets');



/*ajoute un grp de champs permettant d'ajouter des thèmes */
  if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
  	'key' => 'group_5fb69f0e697a6',
  	'title' => 'Thème',
  	'fields' => array(
  		array(
  			'key' => 'field_5fb69f744f5fc',
  			'label' => 'Nouveau theme',
  			'name' => 'nouveau_theme',
  			'type' => 'repeater',
  			'instructions' => 'Remplir les différentes section pour ajouter un nouveau thème',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'collapsed' => '',
  			'min' => 0,
  			'max' => 0,
  			'layout' => 'block',
  			'button_label' => '',
  			'sub_fields' => array(
  				array(
  					'key' => 'field_5fb69f8a4f5fd',
  					'label' => 'Nom theme',
  					'name' => 'nom_theme',
  					'type' => 'text',
  					'instructions' => 'Nom du theme',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => '',
  					'append' => '',
  					'maxlength' => '',
  				),
  				array(
  					'key' => 'field_5fb6a0584f5fe',
  					'label' => 'Image du theme',
  					'name' => 'image_theme',
  					'type' => 'image',
  					'instructions' => 'Intégrez une image',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'return_format' => 'array',
  					'preview_size' => 'medium',
  					'library' => 'all',
  					'min_width' => '',
  					'min_height' => '',
  					'min_size' => '',
  					'max_width' => '',
  					'max_height' => '',
  					'max_size' => '',
  					'mime_types' => '',
  				),
  				array(
  					'key' => 'field_5fb6a2054f5ff',
  					'label' => 'Description du thème',
  					'name' => 'description_theme',
  					'type' => 'text',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => '',
  					'append' => '',
  					'maxlength' => '',
  				),
  				array(
  					'key' => 'field_5fb6a2aa4f600',
  					'label' => 'Mot clé',
  					'name' => 'keyword',
  					'type' => 'text',
  					'instructions' => 'Mot clé décrivant la thématique',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => '',
  					'append' => '',
  					'maxlength' => '',
  				),
  			),
  		),
  	),
  	'location' => array(
  		array(
  			array(
  				'param' => 'page_template',
  				'operator' => '==',
  				'value' => 'page-template/theme.php',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'normal',
  	'style' => 'default',
  	'label_placement' => 'top',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => '',
  	'active' => true,
  	'description' => '',
  ));

  endif;
?>
