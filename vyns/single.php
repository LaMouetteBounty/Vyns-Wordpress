
<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid">
		<section class="actu_type">

			<div class="container">


				<?php

				if (have_posts()) :

					// Loop Start
					while (have_posts()) :

						the_post();

						?>

			
						<div>
						 <?php if (get_the_title()) : ?> 
								<h1><?php the_title(); ?></h1>
							<?php endif; ?>
						</div>


						<div class="row ensemble_info">
							<div class="info_article col-5">
								<div class="champ_info">
                                <p><span>Numéro du vinyle :</span>
										intergration bdd</p>
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
                    
                    <?php
				$attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
				if (!is_array($attachments)) continue;
				$count = count($attachments);
				$first_attachment = array_shift($attachments);
				?>
							<div class="image_album offset-1 col-5">
							<?php echo wp_get_attachment_image($first_attachment->ID, 'thumbnail'); ?>
							</div>
						</div>
					<?php

				endwhile; // Loop End
			endif; // have_posts()

			?>
			</div>
		</section>
	</div>
</article>

<?php get_footer(); ?>