<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Vyns</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" /> -->
    <!-- CDN Leaflet -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/> -->
<!-- Lien pour Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

    <?php wp_head(); ?>
</head>

<body>
    <header class="container-fluid">

        <!-- ########################################################## -->
        <!-- #########################NAVBAR########################## -->
        <!-- ########################################################## -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container header">
                <div class="row">
                    <a class="navbar-brand" href="http://localhost:8080/?page_id=88""><img src="http://localhost:8080/wp-content/themes/vyns/assets/images/logo.svg"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="http://localhost:8080/?page_id=88">HOME<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8080/?page_id=85">ACTUALITÉS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8080/?page_id=39">BLUES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8080/?page_id=49">DISCO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8080/?page_id=46">ROCK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8080/?page_id=51">JAZZ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
