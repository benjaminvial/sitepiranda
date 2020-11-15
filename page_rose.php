<?php
/**
* Template Name: rose
*/
get_header();?>
<section style="background-color:lightblue;">
  <!--The Loop (la boucle)-->
<?php if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>
<article>
    <a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
    <div><?php the_content(); ?></div>
</article>
<p> <?php comments_number();?>.</p>
<?php endwhile;else:?><p> Désolé pas d'article!</p>
 <?php endif; ?>
<section>
  <?php get_footer();?>
