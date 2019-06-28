<?php
/*
Template Name: HOME
*/
?>
<?php get_header(); ?>
<?php
$query = new WP_Query(array(

  'post_type' => 'post',
  'posts_per_page' => 3, // infini
  'orderby' => 'date_post',
  'order' => 'DESC' // par titre
)); ?>
<div class="container-fluid">
  <div class="container">
    <div class="row">

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner  col-12">
          <div class="carousel-item active">
            <?php if ($query->have_posts()) : $query->the_post(); ?>
              <img class="d-block w-100 img-fluid" <?php the_post_thumbnail();?> >

              <div class="carousel-caption d-none d-md-block">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a class="liens" href="http://localhost:8080/category/articles/"> Lire l'article </a>
                <a class="lien_article_mobile" href="http://localhost:8080/category/articles/"> Lire l'article </a>
              <?php endif; ?>
            </div>
          </div>

          <div class="carousel-item">
            <?php if ($query->have_posts()) : $query->the_post(); ?>
            <img class="d-block w-100 img-fluid" <?php the_post_thumbnail();?> >
              <div class="carousel-caption d-none d-md-block">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a class="liens" href="http://localhost:8080/category/articles/"> Lire l'article </a>
                <a class="lien_article_mobile" href="http://localhost:8080/category/articles/"> Lire l'article </a>
              <?php endif; ?>
            </div>
          </div>

          <div class="carousel-item">
            <?php if ($query->have_posts()) : $query->the_post(); ?>
            <img class="d-block w-100 img-fluid" <?php the_post_thumbnail();?> >
              <div class="carousel-caption d-none d-md-block">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a class="liens" href="http://localhost:8080/category/articles/"> Lire l'article </a>
                <a class="lien_article_mobile" href="http://localhost:8080/category/articles/"> Lire l'article </a>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span></a>
      </div>


      <!-- #######################ACTU FORMAT MOBILE#################### -->



    </div>
  </div>
</div>
<!-- ###################################################### -->


<section class="container-fluid">
  <div class="main_home">
    <div class="container">
      <div class="row rubriques">
        <a href="http://localhost:8080/vinyles-blues/">
          <div class="rubrique_blues">
            <img src="http://localhost:8080/wp-content/themes/vyns/assets/images/rubriques/blues.jpg" width="150" height="150" alt="photo harmonica rubrique blues">
            <p class="rubrique_style">BLUES</p>
            <p class="rubrique_nombre">
              <?php echo wp_count_posts('blues')->publish; ?>
              <?php $posts = get_posts('post_type=album&category=0');
              $cat = get_categories();
              $cat = $cat[1];
              echo $cat->cat_name;
              ?> titres</p>
          </div>
        </a>

        <a href="http://localhost:8080/vinyles-disco/">
          <div class="rubrique_disco">
            <img src="http://localhost:8080/wp-content/themes/vyns/assets/images/rubriques/disco.jpg" width="150" height="150" alt="photo synthétiseur rubrique disco">
            <p class="rubrique_style">DISCO</p>

            <p class="rubrique_nombre">
              <?php echo wp_count_posts('disco')->publish; ?>
              <?php $posts = get_posts('post_type=album&category=0');
              $cat = get_categories();
              $cat = $cat[1];
              echo $cat->cat_name;
              ?> titres</p>
          </div>
        </a>

        <a href="http://localhost:8080/vinyles-rock/">
          <div class="rubrique_rock">
            <img src="http://localhost:8080/wp-content/themes/vyns/assets/images/rubriques/rock.jpg" width="150" height="150" alt="photo guitare électrique rubrique rock">
            <p class="rubrique_style">ROCK</p>
            <p class="rubrique_nombre">
              <?php echo wp_count_posts('rock')->publish; ?>
              <?php $posts = get_posts('post_type=album&category=0');
              $cat = get_categories();
              $cat = $cat[1];
              echo $cat->cat_name;
              ?> titres</p>
          </div>
        </a>

        <a href="http://localhost:8080/vinyles-jazz/">
          <div class="rubrique_jazz">
            <img src="http://localhost:8080/wp-content/themes/vyns/assets/images/rubriques/jazz.jpg" width="150" height="150" alt="photo saxophone rubrique jazz">
            <p class="rubrique_style">JAZZ</p>
            <p class="rubrique_nombre">
              <?php echo wp_count_posts('jazz')->publish; ?>
              <?php $posts = get_posts('post_type=album&category=0');
              $cat = get_categories();
              $cat = $cat[1];
              echo $cat->cat_name;
              ?> titres</p>
          </div>
        </a>
      </div>
    </div>

    <!-- #################FORMULAIRE CONTACT###################### -->
    <div class="container">
      <div class="row titre_contact">
        <h1> CONTACT </h1>
      </div>
      <div class="row contact">
        <form action="#" id="contactForm" method="post" class="
      xs-col-12 
      sm-col-12 
      md-col-12 
      lg-col-5 
      xl-col-5">
          <div class="row">

            <div class="form-group col-sm-6">
              <label for="name" class="h4">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Entrer nom" required aria-describedby="emailHelp">
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-sm-6">
              <label for="email" class="h4">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Entrer email" required aria-describedby="emailHelp">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="message" class="h4 ">Message</label>
            <textarea id="message" class="form-control" rows="5" name="message" placeholder="Entrer votre message" required></textarea>
            <div class="help-block with-errors"></div>
          </div>

          <input name="message-submit" type="submit" id="form-submit" class="btn btn-success btn-lg pull-right">
          <input type="hidden" name="hidden" value="1">
          <?php

          if (isset($_GET['send']) && $_GET['send'] === "sent") {
            echo 'E-mail envoyé';
          } else if (isset($_GET['send']) && $_GET['send'] === "notSent") {
            echo 'Problème de serveur';
          } ?>
        </form>




        <!-- <input type="text" class="input_map">
          <button id="btn-change">Changer d'adress</button> -->
        <div id="map" data-address="<?php echo get_option('vinyle_map_address')?>">
          <!-- Ici s'affichera la carte -->
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>