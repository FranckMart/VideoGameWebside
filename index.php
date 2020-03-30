<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/accueil.css">
  <title>Accueil</title>
</head>

<body>
  <header>
    <?php include("include/header.php") ?>
    <?php include("include/modal.php") ?>
    <?php include("include/modalLogin.php") ?>

  </header>
  <section>
    <?php include("include/carousel.php") ?>

    <article>
      <div id="contentCenter">


        <div class="contentLeft">
          <div class="titleNews">
            <h3> News du jour </h3>
          </div>
          <ul>
            <li><a href="#">On vous fait découvrir Animal Crossing : New Horizons en direct sur...</li>
            <li><a href="#">Cities Skylines - L'extension Sunset Harbor se trouve une date de sor...</a></li>
            <li><a href="#"> GTA Online - Récompenses doublées et véhicule gratuit cette semai...</a></li>
            <li><a href="#">On vous fait découvrir Animal Crossing : New Horizons en direct sur...</li>
            <li><a href="#">Cities Skylines - L'extension Sunset Harbor se trouve une date de sor...</a></li>
            <li><a href="#"> GTA Online - Récompenses doublées et véhicule gratuit cette semai...</a></li>
            <li><a href="#">On vous fait découvrir Animal Crossing : New Horizons en direct sur...</li>
            <li><a href="#">Cities Skylines - L'extension Sunset Harbor se trouve une date de sor...</a></li>
            <li><a href="#"> GTA Online - Récompenses doublées et véhicule gratuit cette semai...</a></li>
          </ul>

        </div>
        <div class="contentRight">
          <div class="contentRightTOP">
            <div class="titleCarousel">
            <h3>Visiter notre espace E-commerce</h3>
            </div>
            <div id="contentRightTopSlide">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 carousselEcommerce" src="img/gameEcommerce1.jpg" alt="First slide">
                    <img class="d-block w-100 carousselEcommerce" src="img/gameEcommerce2.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item ">
                  <img class="d-block w-100 carousselEcommerce" src="img/godiesEcommerce1.jpg" alt="Second slide">
                    <img class="d-block w-100 carousselEcommerce" src="img/godiesEcommerce2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 carousselEcommerce" src="..." alt="Third slide">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="contentRightBottom">
            <div class="titleTest">
              <h3> Nos Tests </h3>
            </div>
            <ul>
              <li><a href="#">On vous fait découvrir Animal Crossing : New Horizons en direct sur...</li>
              <li><a href="#">Cities Skylines - L'extension Sunset Harbor se trouve une date de sor...</a></li>
              <li><a href="#"> GTA Online - Récompenses doublées et véhicule gratuit cette semai...</a></li>
              <li><a href="#">On vous fait découvrir Animal Crossing : New Horizons en direct sur...</li>
              <li><a href="#">Cities Skylines - L'extension Sunset Harbor se trouve une date de sor...</a></li>
              <li><a href="#"> GTA Online - Récompenses doublées et véhicule gratuit cette semai...</a></li>

            </ul>

          </div>
        </div>
      </div>
    </article>
  </section>


  <footer>
    <?php include("include/footer.php") ?>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="JS/modal.js"></script>
  <script src="JS/accueil.js"></script>
</body>

</html>