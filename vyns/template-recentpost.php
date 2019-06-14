<?php
/*
Template Name: POST LIST
*/
 
?>
<?php get_header(); ?>
<div class="container-fluid">
	<section class="page_type">

		<div class="container">
			<div class="row">
				<div class="titre_style">
					<h2> ACTUALITÉS </h2>
				</div>
			</div>

			<?php
$all_terms = get_terms( 'all' );
?>

<?php
foreach ( $all_terms as $all_term ) {
    $all_query = new WP_Query( array(
        'post_type' => 'all',
        'tax_query' => array(
            array(
                'taxonomy' => 'all',
                'field' => 'slug',
                'terms' => array( $all_term->slug ),
                'operator' => 'IN'
            )
        )
    ) );
    ?>
    <h2><?php echo $all_term->name; ?></h2>
    <ul>
    <?php
    if ( $all_query->have_posts() ) : while ( $all_query->have_posts() ) : $all_query->the_post(); ?>
        <li><?php echo the_title(); ?></li>
    <?php endwhile; endif; ?>
    </ul>
    <?php
    // Reset things, for good measure
    $member_group_query = null;
    wp_reset_postdata();
}
?>






			</div>
		
</div>
</section>
</div>

<?php get_footer(); ?>