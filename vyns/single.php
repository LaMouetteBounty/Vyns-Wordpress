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
                        <div class="titre_style_inside">
                            <?php if (get_the_title()) : ?>
                                <h2><?php the_title(); ?></h2>
                            <?php endif; ?>
                        </div>

                        <div class="row ensemble_info">
                            <div class="info_article xs-col-12 
      sm-col-12 
      md-col-12 
      lg-col-5 
      xl-col-5">
                                <div class="champ_info">
                                    <span>Titre du vinyle : </span>
                                    <p> <?php echo get_post_meta($post->ID, 'vinyle_titre', true); ?></p>
                                </div>
                                <div class="champ_info">
                                    <span>Numéro du vinyle : </span>
                                    <p> <?php echo get_post_meta($post->ID, 'blues_number', true); ?></p>
                                </div>
                                <div class="champ_info">
                                    <span>Date de sortie : </span>
                                    <p> <?php echo get_post_meta($post->ID, 'vinyle_date', true); ?></p>
                                </div>
                                <div class="champ_info">
                                    <span>Pressage : </span>
                                    <p> <?php echo get_post_meta($post->ID, 'vinyle_pressage', true); ?></p>
                                </div>
                                <div class="champ_info">
                                    <span>Label : </span>
                                    <p> <?php echo get_post_meta($post->ID, 'vinyle_label', true); ?></p>
                                </div>
                                <div class="champ_info">
                                    <span>Durée : </span>
                                    <p> <?php echo get_post_meta($post->ID, 'vinyle_duree', true); ?> minutes</p>
                                </div>
                                <div class="champ_info">
                                    <span>Prix : </span>
                                    <p><?php echo get_post_meta($post->ID, 'vinyle_prix', true); ?> €</p>
                                </div>

                            </div>
                            <div class="image_album 
                            xs-col-12 
      sm-col-12 
      md-col-12 
      lg-offset-1 lg-col-5 
      xl-offset-1 xl-col-5">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        </div>

                        <div class="row champ_description">
                            <span>Description : </span>
                            <p> <?php echo get_post_meta($post->ID, 'vinyle_description', true); ?></p>
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


