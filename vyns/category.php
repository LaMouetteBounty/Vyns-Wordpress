<?php get_header(); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
        <div class="titre_style_actu">
				<h2> ACTUALITÉS </h2>
            </div>
        </div>
            
            <div class="row actu_content col-12">
                <div id="actu" class="d-flex flex-wrap" data-url="<?php echo get_rest_url(null, '/wp/v2/posts'); ?>" data-categoryid="<?php echo get_query_var('cat'); ?>">
                    <!-- Liste des articles  -->

                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>