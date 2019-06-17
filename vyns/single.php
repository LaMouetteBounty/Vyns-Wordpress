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
                                    <p><span>Numéro du vinyle :</span></p>
                                        <p>
                                        <?php
                                        // if (get_post_custom($post_id)) :
                                        // return get_post_meta( $post_id, '_blues_number_value_key', true)['number'];
                                        // endif;

                                        // if (get_post_custom($post->ID)) :
                                        //  get_post_meta( $post->ID, '_blues_number_value_key', true);
                                        //  echo $post->ID;
                                        // endif;

                                        // $meta_number = get_post_custom( $post->ID, '_blues_number_value_key', true);
                                        //     echo $meta_number;

                                        // if (get_post_custom($post->ID)) :
                                        // $meta_number = get_post_meta( $post->ID, '_blues_number_value_key', true);
                                        // echo $meta_number;
                                        // endif;

                                        // $meta_number = get_post_meta($post->ID,'_blues_number_value_key', true );
                                        //     echo  $value . $meta_number;

                                        // $meta_number = get_post_meta($post->ID,'blues_number_field', true );
                                        // echo $meta_number;

                                        // if ($meta_number = get_post_meta($post->ID,'blues_number_field', true )) :   
                                        //  echo $meta_number;
                                        // endif;


                                        //  if (get_post_custom($post_id)) :   
                                        //   $meta_number = get_post_meta($post->ID,'blues_number_field', true);
                                        //   echo $meta_number;
                                        // endif;

                                        // var_dump (get_post_meta($post->ID,'_blues_number', true));
                                        var_dump (get_post_meta(160));
                                        ?>

                                        
                                        <br>
                                         
                                        </p>
                                       
                                        
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