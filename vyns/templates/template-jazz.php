<?php
/*
Template Name: JAZZ
*/
 
?>
<?php get_header(); ?>
<div class="container-fluid">
	<section class="page_type">

		<div class="container">
			<div class="row">
				<div class="titre_style">
					<h2> JAZZ </h2>
				</div>
			</div>
			<div class="row" id="vinyles" data-url="<?php echo get_rest_url(null, '/wp/v2/jazz_api'); ?>" >
            </div>
		</div>
	</section>
</div>
<?php get_footer(); ?>