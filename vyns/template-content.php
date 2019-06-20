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
              <?php endif; ?>
            </div>
          </div>

          <div class="carousel-item">
            <?php if ($query->have_posts()) : $query->the_post(); ?>
              <img class="d-block w-100 img-fluid" src="http://localhost:8080/wp-content/themes/vyns/assets/images/blues/guitar-839168_1280.jpg">
              <div class="carousel-caption d-none d-md-block">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
              <?php endif; ?>
            </div>
          </div>

          <div class="carousel-item">
            <?php if ($query->have_posts()) : $query->the_post(); ?>
              <img class="d-block w-100 img-fluid" src="http://localhost:8080/wp-content/themes/vyns/assets/images/rock/musician-2708190_1920.jpg">
              <div class="carousel-caption d-none d-md-block">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
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
    </div>
  </div>
</div>

<!-- ###################################################### -->


<section class="container-fluid">
  <div class="main_home">
    <div class="container">
      <div class="row rubriques">
        <a href="http://localhost:8080/?page_id=39">
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

        <a href="http://localhost:8080/?page_id=49">
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

        <a href="http://localhost:8080/?page_id=46">
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

        <a href="http://localhost:8080/?page_id=51">
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



        <div class="
        xs-offset-0 xs-col-12
        sm-offset-0 sm-col-12
        md-offset-0 md-col-12
        lg-offset-1 lg-col-5
        xl-offset-1 xl-col-5">

          <input type="text" class="input_map">
          <button id="btn-change">Changer d'adress</button>
          <div id="map">
            <!-- Ici s'affichera la carte -->

          </div>





          <!-- ############################################## -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ############################################## -->

<?php
global $wpdb;

// Interrogation de la base de données
$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}options WHERE option_name = 'adress_client'");
// Parcours des resultats obtenus
foreach ($resultats as $post) {
  echo $post->option_value;
  echo '<br/>';
}
?>
<script>
  var adress_client = '<?PHP echo $post->option_value; ?>';
  console.log(adress_client);

  // var input = document.querySelector('.input_map');
  // var btnX = document.querySelector('#btn-change');
  // // btnX.addEventListener("click"Goto());

  function Goto(adress) {
    var L = window.L;
    var xmlhttp = new XMLHttpRequest();
    var url = "https://nominatim.openstreetmap.org/search?format=json&limit=3&q=" + adress;
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText != '[]') {
          var myArr = JSON.parse(this.responseText);
          var latitudex = myArr[0]['lat'];
          var longitudex = myArr[0]['lon'];
          console.log('latitude=' + latitudex + ' et longitude=' + longitudex);
          var marker = L.marker([latitudex, longitudex]).addTo(macarte);
        } else {
          alert('pas trouvé');
        }
      }
    };


    xmlhttp.open("GET", url, true);
    xmlhttp.send();
  }



  // On initialise la latitude et la longitude de Paris (centre de la carte)
  var lat = 47.95;
  var lon = 5.349903;

  var macarte = null;
  // Fonction d'initialisation de la carte
  function initMap() {
    // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
    macarte = L.map('map').setView([lat, lon], 11);
    // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
      // Il est toujours bien de laisser le lien vers la source des données
      attribution: 'donnsées © <a href="osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="openstreetmap.fr">OSM France</a>',
      minZoom: 1,
      maxZoom: 20
    }).addTo(macarte);


  }
  window.onload = function() {
    // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
    initMap();
  };
  Goto(adress_client);
  console.log('fin script');
</script>
<?php get_footer(); ?>