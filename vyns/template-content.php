<?php
/*
Template Name: HOME
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
  <div class="container">
    <div class="row">

      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="http://localhost:8080/wp-content/themes/vyns/assets/images/blues/guitar-839168_1280.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="http://localhost:8080/wp-content/themes/vyns/assets/images/jazz/pub-3284641_1920.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="http://localhost:8080/wp-content/themes/vyns/assets/images/rock/musician-2708190_1920.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>


    </div>
  </div>
</div>

<!-- ###################################################### -->


<section class="container-fluid">
  <div class="main_home">
    <div class="container">
      <div class="row rubriques">
        <a href="#">
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

        <a href="#">
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

        <a href="#">
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

        <a href="#">
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
        <form role="form" id="contactForm" data-toggle="validator" class="shake col-5">
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="name" class="h4">Nom</label>
              <input type="text" class="form-control" id="name" required data-error="NEW ERROR MESSAGE">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
              <label for="email" class="h4">Email</label>
              <input type="email" class="form-control" id="email" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="message" class="h4 ">Message</label>
            <textarea id="message" class="form-control" rows="5" required></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">ENVOYER</button>
          <div id="msgSubmit" class="h3 text-center hidden"></div>
          <div class="clearfix"></div>
        </form>
        <div class="map offset-1 col-5">
          <!-- <form>
            <label for="adresse">Entrez votre adresse postale</label>
            <input type="text" name="adresse" id="adresse">
            <input type="submit" class="btn" name="valider" value="Valider l'adresse" id="envoyer">
            <span>
              <ul id="suggestions">
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </span>
          </form> -->
        </div>
      </div>

</section>
<?php get_footer(); ?>