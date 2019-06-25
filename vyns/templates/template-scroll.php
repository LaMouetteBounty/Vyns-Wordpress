<?php
/*
Template Name: SCROLL
*/
?>


<?php get_header(); ?>
<div class="container-fluid">
    <section class="page_type">

        <div class="container">
            <div class="row">
                <div class="titre_style">
                    <h2> TEST SCROLL </h2>
                </div>
            </div>


            <?php
            // $query = new WP_Query(array(
            //     $size =
            //         'post_type' => 'blues',
            //     'posts_per_page' => -1, // infini
            //     'orderby' => 'date', // par titre
            // ));
            ?>
            <?php
            // while ($query->have_posts()) : $query->the_post(); 
            ?>
            <?php
            // $attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
            // if (!is_array($attachments)) continue;
            // $count = count($attachments);
            // $first_attachment = array_shift($attachments);
            ?>



            <?php $post_id = $post->ID;
            $term = wp_get_post_terms($post_id, 'blues');
            ?>
            <div class="row" id="blues" data-url="<?php echo get_rest_url(null, '/wp/v2/blues_api'); ?>" data-categoryid="<?php echo $term[0]->term_id; ?>">
                <p>lol</p>
                <?php var_dump(get_rest_url); ?>
            </div>
            <?php
            //  endwhile; 
            ?>
        </div>

</div>
</section>
</div>

<?php get_footer(); ?>