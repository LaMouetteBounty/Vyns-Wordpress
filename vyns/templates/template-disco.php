<?php
/*
Template Name: DISCO
*/

?>
<?php get_header(); ?>

           
<div class="container-fluid">
	<section class="page_type">
		<div class="container">
			<div class="row">
				<div class="titre_style">
					<h2> DISCO </h2>
				</div>
			</div>
			<div id="vinyles" data-url="<?php echo get_rest_url(null, '/wp/v2/disco_api'); ?>" >
            </div>
		</div>
	</section>
</div>
<?php get_footer(); ?>