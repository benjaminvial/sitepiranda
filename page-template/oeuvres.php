<?php
/**
 * Template Name: Oeuvre
 */
get_header('oeuvre');?>

<section>
  <!--The Loop (la boucle)-->
<?php if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>
<article>
    <h2><?php the_title(); ?></h2>
    <div><?php the_content(); ?></div>
</article>
<?php endwhile;else:?>
 <?php endif; ?>

</section>
  <?php get_footer();?>
