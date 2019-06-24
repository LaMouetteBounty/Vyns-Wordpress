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
              <img class="d-block w-100 img-fluid" src="http://localhost:8080/wp-content/themes/vyns/assets/images/jazz/pub-3284641_1920.jpg">
              <div class="carousel-caption d-none d-md-block">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a class="lien_article_mobile" href="http://localhost:8080/?page_id=85"> > Lire l'article < </a>
              <?php endif; ?>
            </div>
          </div>

          <div class="carousel-item">
            <?php if ($query->have_posts()) : $query->the_post(); ?>
              <img class="d-block w-100 img-fluid" src="http://localhost:8080/wp-content/themes/vyns/assets/images/blues/guitar-839168_1280.jpg">
              <div class="carousel-caption d-none d-md-block">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a class="lien_article_mobile" href="http://localhost:8080/?page_id=85"> > Lire l'article < </a>
              <?php endif; ?>
            </div>
          </div>

          <div class="carousel-item">
            <?php if ($query->have_posts()) : $query->the_post(); ?>
              <img class="d-block w-100 img-fluid" src="http://localhost:8080/wp-content/themes/vyns/assets/images/rock/musician-2708190_1920.jpg">
              <div class="carousel-caption d-none d-md-block">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a class="lien_article_mobile" href="http://localhost:8080/?page_id=85"> > Lire l'article < </a>
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
        <form role="form" id="contactForm" data-toggle="validator" class="shake 
      xs-col-12 
      sm-col-12 
      md-col-12 
      lg-col-5 
      xl-col-5">
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="name" class="h4">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter name" required data-error="NEW ERROR MESSAGE">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
              <label for="email" class="h4">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="message" class="h4 ">Message</label>
            <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
          <div id="msgSubmit" class="h3 text-center hidden"></div>
          <div class="clearfix"></div>
        </form>





        <!-- <input type="text" class="input_map">
          <button id="btn-change">Changer d'adress</button> -->
        <div id="map">
          <!-- Ici s'affichera la carte -->

        </div>





        <!-- ############################################## -->

      </div>
    </div>
  </div>
  <?php
  global $wpdb;

  $query = "SELECT * FROM {$wpdb->prefix}options";

  // Interrogation de la base de données
  $resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}options WHERE option_name = 'adress_client'");
  // Parcours des resultats obtenus
  foreach ($resultats as $post) {
    // echo $post->option_value;
    echo '<br/>';
  }
  ?>

  <script>
    mymap = L.map('map');
    var mondayLayer = L.geoJSON()
    var adress_client = '<?PHP echo $post->option_value; ?>';
    console.log(adress_client);


    function Goto(adress) {

      fetch('https://nominatim.openstreetmap.org/search?format=json&limit=3&q=' + adress)
        .then(function(response) {
          return response.json();
        })
        .then(function(data) {
          var lat = data[0]['lat'];
          var long = data[0]['lon'];
          var marker = L.marker([lat, long]).addTo(mymap).bindPopup('<strong>Je suis ici !</strong>');

          mymap.setView([lat, long], 15);

        })
        .catch(function(error) {
          console.log("ici " + error.message);
        });

    }

    // Fonction d'initialisation de la carte
    function initMap() {
      // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"

      // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
      L.tileLayer('https://api.mapbox.com/styles/v1/mgaaintjrae/cjw1s9oo30hlo1co1l7mgq804/tiles/256/{z}/{x}/{y}?&access_token=pk.eyJ1IjoibWdhYWludGpyYWUiLCJhIjoiY2p3MXMzMzJqMG4xcDQwa3Q1a25heGtnbyJ9.DMXg-P_uxnVml82Ki6SmUQ#10.0/42.362400/-71.020000/0}', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: 'Mapbox',
        minZoom: 1,
        maxZoom: 20
      }).addTo(mymap);



    }
    window.onload = function() {
      // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
      initMap();
    };

    Goto(adress_client);
  </script>
</section>
<?php get_footer(); ?>