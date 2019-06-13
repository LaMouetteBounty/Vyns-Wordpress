<?php get_header(); ?>
<div class="container-fluid">
	<section class="page_type">

		<div class="container">
			<div class="row">
				<div class="titre_style">
					<h2> BLUES </h2>
				</div>
			</div>


			<?php
			$query = new WP_Query(array(
				$size =
					'post_type' => 'blues',
				'posts_per_page' => -1, // infini
				'orderby' => 'date', // par titre
			));
			?>
			<?php while ($query->have_posts()) : $query->the_post(); ?>
				<?php
				$attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
				if (!is_array($attachments)) continue;
				$count = count($attachments);
				$first_attachment = array_shift($attachments);
				?>

				<?php
				$attachmentsExtrait = get_children(array('post_parent' => get_the_ID(), 'post_content' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
				if (!is_array($attachmentsExtrait )) continue;
				$count = count($attachmentsExtrait );
				$first_attachment = array_shift($attachmentsExtrait );
				?>

				<div class="row ligne_article">
					<div class="articles">
						<div class="date_article"><?php the_date(); ?></div>
						<div class="img_article"><?php echo wp_get_attachment_image($first_attachment->ID, 'thumbnail'); ?></div>
						<p class="titre_article"><?php the_title(); ?></p>
						<div class="extrait_article"><?php the_excerpt(); ?></div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</section>
</div>

<?php get_footer(); ?>