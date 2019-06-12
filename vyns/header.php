<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Exemple de thème WordPress</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body>
    <header class="container-fluid">

        <!-- ########################################################## -->
        <!-- #########################NAVBAR########################## -->
        <!-- ########################################################## -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container header">
                <div class="row">
                    <a class="navbar-brand" href="#"><img src="http://localhost:8080/wp-content/themes/vyns/assets/images/logo.svg"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ACTUALITÉS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">BLUES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">DISCO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ROCK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">JAZZ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ########################################################## -->
        <!-- #########################END NAVBAR########################## -->
        <!-- ########################################################## -->
    </header>

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