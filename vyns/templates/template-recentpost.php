<?php
/*
Template Name: POST LIST
*/
?>
<?php get_header(); ?>
<?php
$query = new WP_Query(array(
	$size =
	'post_type' => 'post', // type de posts
	'posts_per_page' => -1, // infini
	'orderby' => 'date', // par titre
)); ?>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="titre_style_actu">
				<h2> ACTUALITÉS </h2>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</div>
		</div>
		<!-- ############################################################## -->

		<?php while ($query->have_posts()) : $query->the_post(); ?>
			<!-- ############################################################## -->
			<div class="underline_actu"></div>
			<div class=" row actu_content">

				<div class="img_actu 
				xs-col-12 sm-col-12 
				md-col-3 lg-col-3 xl-col-3">
					<?php the_post_thumbnail('medium') ?>
				</div>

				<div class="content_post 
				sm-col-12 xs-col-12
				md-offset-1 md-col-8 
				lg-offset-1 lg-col-8 
				xl-offset-1 xl-col-8">
					<p class="titre_article_actu"><?php the_title(); ?> </p>
					<p><?php the_content(); ?></p>
					<p> Publié le <?php the_modified_date(); ?></p>
				</div>
			</div>

			<div class="underline_actu"></div>

			<!-- ############################################################## -->
<?php endwhile; ?>
		</div>
	</div>

<?php get_footer(); ?>

