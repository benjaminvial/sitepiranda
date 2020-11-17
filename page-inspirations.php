<?php get_header();?>
<h1> Inspirations</h1>
<section>
  <?php
  $categorie= get_category_by_slug("artiste");
  $args = array('posts_per_page'   => -1,
                'category'         => $categorie->term_id,
                'orderby'          => 'name',
                'order'            => 'ASC',
                 );
                $posts = get_posts($args);
                foreach ( $posts as $post ) : setup_postdata( $post ); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

            <div><?php the_content(); ?></div>
        </li>
    <?php endforeach;
    wp_reset_postdata();?>
</section>
  <?php get_footer5();?>
