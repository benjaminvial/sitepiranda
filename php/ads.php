<?php

/**
* Template Name: Page Inside
* Description: Page Inside
*/

get_header(); ?>

<main></main>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
  </head>
<body>
<div class="wrap">
	<h1> Amour désir & soupir <h1>
		<br>
		<div id="photo">
	<img src="<?php echo get_template_directory_uri();?>/pictures/ADS/AD&S/clabonne.jpg" alt="logo phone" width="" height="">
	<img src="<?php echo get_template_directory_uri();?>/pictures/ADS/ADSTIPRINCE/tiprince.jpg" alt="logo phone" width="" height="">
	<img src="<?php echo get_template_directory_uri();?>/pictures/ADS/gus/gus.png" alt="logo phone" width="" height="">
</div>
<br>
<form id="button">
	<input type ="button" value ="Retour aux thématiques" onclick ="history.go(-1)">
</form>



</div>
</body>
</html>
<?php get_footer(); ?>
