<?php get_header(); ?>
<div class="container-fluid">
	<section class="page_type">

		<div class="container">
			<div class="row">
				<div class="titre_style">
					<h2> STYLE </h2>
				</div>
			</div>
			<div class="row">
				<h3> Titre de l'album </h3>
			</div>


			<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=5');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
	<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
	<p><?php the_date(); ?></p>
	<p><?php the_excerpt(); ?></p>
	<p><?php the_category(); ?> </p>
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