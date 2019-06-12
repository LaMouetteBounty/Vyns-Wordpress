<section class="container-fluid">
    <div class="main_home">
        <div class="container">
            <div class="row rubriques">
                <div class="rubrique_blues">
                    <img src="http://localhost:8080/wp-content/themes/vyns/assets/images/rubriques/blues.jpg" width="150" height="150" alt="photo harmonica rubrique blues">
                    <p class="rubrique_style">BLUES</p>
                    <p class="rubrique_nombre">Nb titre</p>
                </div>

                <div class="rubrique_disco">
                    <img src="http://localhost:8080/wp-content/themes/vyns/assets/images/rubriques/disco.jpg" width="150" height="150" alt="photo synthétiseur rubrique disco">
                    <p class="rubrique_style">DISCO</p>
                    <p class="rubrique_nombre">Nb titre</p>
                </div>

                <div class="rubrique_rock">
                    <img src="http://localhost:8080/wp-content/themes/vyns/assets/images/rubriques/rock.jpg" width="150" height="150" alt="photo guitare électrique rubrique rock">
                    <p class="rubrique_style">ROCK</p>
                    <p class="rubrique_nombre">Nb titre</p>
                </div>

                <div class="rubrique_jazz">
                    <img src="http://localhost:8080/wp-content/themes/vyns/assets/images/rubriques/jazz.jpg" width="150" height="150" alt="photo saxophone rubrique jazz">
                    <p class="rubrique_style">JAZZ</p>
                    <p class="rubrique_nombre">Nb titre</p>
                </div>
            </div>
        </div>
        <!-- #################FORMULAIRE CONTACT###################### -->
        <div class="container">
            <div class="row">
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
    <img src="http://localhost:8080/wp-content/themes/vyns/assets/images/map.png" width="500">
            </div>
        </div>
</section>