<?php get_header(); ?>
<div class="container-fluid">
	<section class="actu_type">

		<div class="container">
			<div class="row">
				<div class="titre_style_inside">
					<h2> BLUES </h2>
				</div>
			</div>
			<?php
$query = new WP_Query( array(
$size =
'post_type' => 'blues',
'posts_per_page' => -1, // infini
'order' => 'ASC', // classé par ordre alphabétique
'orderby' => 'title', // par titre
) );
?>
<?php while ($query->have_posts()) : $query->the_post(); ?>

<div class="row"><h3><?php the_title(); ?></h3>
			</div>

	

<li><?php the_date(); ?><br /><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(array(100,100)); ?></a><br />
<?php the_title(); the_excerpt(); ?></li>
<?php endwhile; ?>
</ul>




			<!-- <div class="row ensemble_info">
				<div class="info_article col-5">
					<div class="champ_info">
						<p>#integrer numero</p>
					</div>
					<div class="champ_info">
						<p><span>Date de sortie :</span>
							intergration bdd</p>
					</div>
					<div class="champ_info">
						<p><span>Pressage :</span>
							intergration bdd</p>
					</div>
					<div class="champ_info">
						<p><span>Label :</span>
							intergration bdd</p>
					</div>
					<div class="champ_info">
						<p><span>Durée :</span>
							intergration bdd</p>
					</div>
					<div class="champ_info">
						<p><span>Prix :</span>
							intergration bdd</p>
					</div>
					<div class="champ_info">
						<p><span>Description :</span>
							intergration bdd</p>
					</div>
				</div>
				<div class="image_album offset-1 col-5">
					<img src="http://localhost:8080/wp-content/themes/vyns/assets/images/rubriques/blues.jpg" width="250" height="250" alt="photo harmonica rubrique blues">
				</div>
			</div> -->
		</div>
	</section>
</div>
<?php get_footer(); ?>

The_categorie

<?php
			$query = new WP_Query(array(
				$size =
					'post_type' => 'blues',
				'posts_per_page' => -1, // infini
				'order' => 'ASC', // classé par ordre alphabétique
				'orderby' => 'title', // par titre
			));
			?>
			<?php while ($query->have_posts()) : $query->the_post(); ?>

				<div class="row">
					<h3><?php the_title(); ?></h3>
				</div>

				<li><?php the_date(); ?><br /><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(array(100, 100)); ?></a><br />
					<?php the_title();
					the_excerpt(); ?></li>
			<?php endwhile; ?>
            </ul>
            


