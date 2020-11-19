<?php get_header();?>
<section>
  <div class="wrap">
		<div class="textes">
			<h2>artistes</h2>
			<span>Merci Auguste Forestier, Pierre Avezard, Emile Ratier, Francis Marshall, créateurs dans l’ombre, tous les anonymes connectés, “ artistes premiers ”, d’océanie, afrique, amériques, celtes… Merci Cy Twombly, Jean-Michel Basquiat, Joseph Cornell, Rebecca Horn, Christian Boltanski, Sophie Calle, Annette messager, Bill Viola, Gina Pane, Valie Export et tous·tes les autres dont le travaille m’interpelle.</span>
		</div>

		<div class="artistes">
			<div>
				<div>
					<img src="<?php echo get_template_directory_uri();?>/pictures/inspirations/auguste_forestier.jpg" alt="">
					<p>auguste forestier</p>
				</div>
				<h3>Sculpture d'un soldat</h3>
				<p>Bois et éléments de récupération (tissus, métal)</p>
			</div>

			<div>
				<div>
					<img src="<?php echo get_template_directory_uri();?>/pictures/inspirations/pierre_avezard.jpg" alt="">
					<p>pierre avezard</p>
				</div>
				<h3>Le Manège</h3>
				<p>Exposé à La Fabuloserie à Dicy dans l'Yonne. Éléments de récupération.</p>
			</div>

			<div>
				<div>
					<img src="<?php echo get_template_directory_uri();?>/pictures/inspirations/rebecca_horn.jpg" alt="">
					<p>rebecca horn</p>
				</div>
				<h3>Achim Thode</h3>
				<p>Mechanischer Körperfächer 1974-75</p>
			</div>
		</div>

		<div class="textes">
			<span>Merci pour certaines de vos oeuvres qui nourrissent mon imaginaire, m’émeuvent. Merci à vous inspiré·es qui m’inspirez. Je célèbre pour certain·es autant la plasticité, matérialité de vos ouvrages, que la poésie qui s’en dégage. Je salue votre engagement à parler du monde, user de vos modes d’expression propre afin d’éveiller les consciences. Je reconnais le pouvoir des histoires que vous êtes capables de faire naître en moi ainsi que la spiritualité matérialisée qui me connecte à plus grand que moi.</span>
		</div>

		<div class="artistes">
			<div>
				<div>
					<img src="<?php echo get_template_directory_uri();?>/pictures/inspirations/joseph_cornell.jpg" alt="">
					<p>joseph cornell</p>
				</div>
				<h3>Tilly Losch</h3>
				<p>Detail from Untitled 1935-1938</p>
			</div>

			<div>
				<div>
					<img src="<?php echo get_template_directory_uri();?>/pictures/inspirations/emile_ratier.jpg" alt="">
					<p>émile ratier</p>
				</div>
				<h3>Sculpture </h3>
				<p>Bois et élements de récupération (bois, clous, couvercles de boîte...)</p>
			</div>

			<div>
				<div>
					<img src="<?php echo get_template_directory_uri();?>/pictures/inspirations/francis_marshall.jpg" alt="">
					<p>francis marshall</p>
				</div>
				<h3>Illustration</h3>
			</div>
		</div>

		<div class="citation">
		<img src="citation.svg">
		</div>
	</div>
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
  <?php get_footer();?>
