<?php
/*
Template Name: BLUES
*/

?>
<?php get_header(); ?>

<div class="container-fluid">
	<section class="page_type">
		<div class="container">
			<div class="row">
				<div class="titre_style">
					<h2> BLUES </h2>
				</div>
			</div>
			<div class="row" id="vinyles" data-url="<?php echo get_rest_url(null, '/wp/v2/blues_api'); ?>" >
            </div>
		</div>
	</section>
</div>

<?php get_footer(); ?>