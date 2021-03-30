<!DOCTYPE html>
<head>
  <title>Live Question</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <script type="text/javascript" src="script.js"></script>
  <!--Lien de la police d'écriture-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
</head>
<html>
  <body class="responT">
    <!--créeation de la navbar et du bouton se connecté -->
    <header>
        <nav id="navBack" class="navbar navbar-expand-lg navbar-light ">
              <div id="ligneTexte" class="container-fluid">
                  <a class="navLien navbar-brand" href="#">Saint Vincent BTS1</a>
                      <button id="placeBouton"  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span id = "changeColor"  class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                                <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lien1</a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                          
                                      </ul>
                                </li>
                                <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lien2</a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    
                                      </ul>
                                </li>
                                <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lien3</a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                          
                                      </ul>
                                </li>
                                <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lien4</a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                          
                                      </ul>
                                </li>
                            </ul>
                            
                            
                      </div>
                      <div class="respon">
                        <form class="d-flex">
                              <button id="connect" class="btn btn-outline-success" type="submit">Se Connecter</button>
                          </form>
                        </div>

              </div>
        </nav>
  </header>
  <!-- image et texte de presentation -->
  <section id="main-images" class="container-fluid">
      <div class="row">
          <div class="col-md-6 col-lg-6">
              <div id="titreImage">
                
                  <h1 class="titre1"> Lorem ipsum </h1>
                  <h1 class="titre2"> dolor sit </h1>
                  <h1 class="titre3"> amet. </h1>
              </div>
              <div id="texteImage">
                  <p class="texteI">Sed elit libero, accumsan et volupat id, aliquam
                  <br>
                  tristique odio. Mauris sed lectus a justo malesuada
                  <br>
                  dapibus.Morbi eleifend tellus nisi, sed ullamcorper
                  <br>
                  mi tincidunt faucibus. Mauris justo tortor, tempor
                  <br>
                  ut odio in, dictum malesuada eros</p>
              </div>
              <div id="boutonImage">
                  <button id="bImage">Bouton CTA</button>
              </div>
          </div>
          <div class="col-md-6 col-lg-6">
              <div id="stepImage">
                  <img class="steImg" src="images/step-1.png" alt="image livequestion ">
              </div>
          </div>
      
      </div>
    
  </section>
  <section id="icons-3" class="container">
      <div class="row">
          <div class="col-md-4 col-lg-4">
              <div id="un" class="imgText">
                  <img src="images/i1.png" alt="icons1" class="iconimg">
                  <p class="imgTitre">Suits Your Style</p>
                  <p>Drogon sed ut perspiciatis unde omnis iste error
                  <br> 
                  sit voluptatem accusantium doloremque
                  <br> 
                  laudantium, totam aperiam, eaque Arya.</p>
              </div>
          </div>
          <div class="col-md-4 col-lg-4">
              <div id="deux" class="imgText">
                  <img src="images/i2.png" alt="icons2" class="iconimg">
                  <p class="imgTitre">Ut posuere molestie</p>
                  <p>Duis convallis convallis tellus imp interdum. Non 
                  <br> 
                  diam phasellus vestibulum lorem sed risus 
                  <br> 
                  ultricies Tyrion. Enim blandit volutpat</p>
              </div>
          </div>
          <div class="col-md-4 col-lg-4">
              <div id="trois" class="imgText">
                  <img src="images/i3.png" alt="icons3" class="iconimg">
                  <p class="imgTitre">Vestibulum ut erat consectetur</p>
                  <p>Eunuch sed blandit libero volupat sed cras.
                  <br> 
                  Cersei quis imperdiet tincidunt unuch pulvinar
                  <br> 
                  sapien. Habitasse platea Davos vestibulum.</p>
              </div>
          </div>
      </div>
  </section>
    <section id="redirection">
      <div class="container">
        <div class="redirectionText">
          <h2>Aenean magna odio</h2>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br> accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
          </p>
        </div>
        <div id="final" class="carousel slide" data-ride="carousel">
          <div class="redirectionLink">
            <a data-target="#final" data-slide-to="0" class="btn boutonlink">Lien1</a>
            <a data-target="#final" data-slide-to="1" class="btn boutonlink">Lien2</a>
            <a data-target="#final" data-slide-to="2" class="btn boutonlink">Lien3</a>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/step-2.jpg" alt="Los Angeles">
              <div class="subti">
                <h2>Praesent vitae velit tristique <span>old alos</span></h2>
                <p>Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
                </p>
                <div class="card1">
                  <img class="rounded-circle" src="images/persona3.jpg">
                  <p>"Proin vel dolor dictum, congue tellus at, lobortis neque"
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="subti-inv">
                <h2>Duis et eros lorem.</h2>
                <p>Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
                </p>
                <div class="card2">
                  <img class="rounded-circle" src="images/persona2.jpg">
                  <p>"Aliquam gravida magna ut"</p>
                </div>
              </div>
              <img class="inv" src="images/step-3.jpg" alt="Chicago">
            </div>
            <div class="carousel-item">
              <div class="subti-inv">
                <h2>Curabitur gravida metus at mi <span>malesuada</span>.</h2>
                <p>Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
                </p>
                <div class="card3">
                  <img class="rounded-circle" src="images/persona1.jpg">
                  <p>"malesuada."</p>
                </div>
              </div>
              <img class="inv" src="images/step-4.png" alt="New York">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="play">
      <img src="images/iplay.png">
      <h2 class="h2play">"Nulla venegatis magna fringilla"</h2>
    </section>
    <!--Partie des 7 boutons avec fond rose-->
    <section id="applications">
      <div class="conatiner">
        <div class="heading">
          <h3>Etiam laot,
            <span class="surlignement">alique sceleris.</span>
          </h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            <br>accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
          </p>
        </div>
        <p class="marques">
          <a href="a" class="btn btn-default">
          <img src="images/marque1.jpg">.Kyan Boards</a>
          <a href="a" class="btn btn-default">
          <img src="images/marque2.jpg">Atica</a>
          <a href="a" class="btn btn-default">
          <img src="images/marque3.jpg">Treva</a>
          <a href="a" class="btn btn-default">
          <img src="images/marque4.jpg">Kanba</a>
          <br>
          <br>
          <a href="a" class="btn btn-default">
          <img src="images/marque5.jpg">Tvit Forms</a>
          <a href="a" class="btn btn-default">
          <img src="images/marque6.jpg">Aven</a>
          <a href="a" class="btn btn-default">
          <img src="images/marque7.jpg">Utosia</a>
        </p>
      </div>
    </section>
    <!--Partie FAQ avec les questions -->
    <section id="questions">
      <div class="conatiner">
        <div class="heading">
          <h3>FAQ</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            <br>accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
          </p>
        </div>
        <div class="list-deroul-6">
          <div class="deroul1">
            <div class="dropdown dropright">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Can I upgrade later on?</button>
              <div class="dropdown-menu">
                <span class="dropdown-item-text">
                Integer ot Oberyn massa. Sed feugiat vitae turpis a porta. Aliquam
                <br>
                sagittis interdum Melissandre. Vivamus ornare pharetra diam sit
                <br>
                amet tincidunt. Eunuch sit amet pharetra odio. Vivamus in tepor
                <br>
                ipsum, sit amet elementum neque. Sed faucibus posuere pharetra.
                <br>
                In imperdiet eleifend dui a aliquet. Aliquam imperdiet Tyrion purus
                <br>
                vitae rutrum. Donec eu commodo nunc. Mauris dignissim lectus
                <br>
                massa, eget cursus quam mollis id. Eddard sit amet ex Jon nibh
                <br>
                maximus cursus at vitae mi. Duis tincidunt aliquam mi sed sagittis.
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="deroul2">
          <div class="dropdown dropright">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Can I port my data from another provider?</button>
            <div class="dropdown-menu">
              <span class="dropdown-item-text">
              Integer ot Oberyn massa. Sed feugiat vitae turpis a porta. Aliquam
              <br>
              sagittis interdum Melissandre. Vivamus ornare pharetra diam sit
              <br>
              amet tincidunt. Eunuch sit amet pharetra odio. Vivamus in tepor
              <br>
              ipsum, sit amet elementum neque. Sed faucibus posuere pharetra.
              <br>
              In imperdiet eleifend dui a aliquet. Aliquam imperdiet Tyrion purus
              <br>
              vitae rutrum. Donec eu commodo nunc. Mauris dignissim lectus
              <br>
              massa, eget cursus quam mollis id. Eddard sit amet ex Jon nibh
              <br>
              maximus cursus at vitae mi. Duis tincidunt aliquam mi sed sagittis.
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="deroul3">
        <div class="dropdown dropright">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Are my food photos stored forever in the cloud?</button>
          <div class="dropdown-menu">
            <span class="dropdown-item-text">
            Integer ot Oberyn massa. Sed feugiat vitae turpis a porta. Aliquam
            <br>
            sagittis interdum Melissandre. Vivamus ornare pharetra diam sit
            <br>
            amet tincidunt. Eunuch sit amet pharetra odio. Vivamus in tepor
            <br>
            ipsum, sit amet elementum neque. Sed faucibus posuere pharetra.
            <br>
            In imperdiet eleifend dui a aliquet. Aliquam imperdiet Tyrion purus
            <br>
            vitae rutrum. Donec eu commodo nunc. Mauris dignissim lectus
            <br>
            massa, eget cursus quam mollis id. Eddard sit amet ex Jon nibh
            <br>
            maximus cursus at vitae mi. Duis tincidunt aliquam mi sed sagittis.
            </span>
          </div>
        </div>
      </div>
      </div>
      <div class="deroul4">
        <div class="dropdown dropright">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Who foots the bill for that?</button>
          <div class="dropdown-menu">
            <span class="dropdown-item-text">
            Integer ot Oberyn massa. Sed feugiat vitae turpis a porta. Aliquam
            <br>
            sagittis interdum Melissandre. Vivamus ornare pharetra diam sit
            <br>
            amet tincidunt. Eunuch sit amet pharetra odio. Vivamus in tepor
            <br>
            ipsum, sit amet elementum neque. Sed faucibus posuere pharetra.
            <br>
            In imperdiet eleifend dui a aliquet. Aliquam imperdiet Tyrion purus
            <br>
            vitae rutrum. Donec eu commodo nunc. Mauris dignissim lectus
            <br>
            massa, eget cursus quam mollis id. Eddard sit amet ex Jon nibh
            <br>
            maximus cursus at vitae mi. Duis tincidunt aliquam mi sed sagittis.
            </span>
          </div>
        </div>
      </div>
      </div>
      <div class="deroul5">
        <div class="dropdown dropright">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">What's the real cost?</button>
          <div class="dropdown-menu">
            <span class="dropdown-item-text">
            Integer ot Oberyn massa. Sed feugiat vitae turpis a porta. Aliquam
            <br>
            sagittis interdum Melissandre. Vivamus ornare pharetra diam sit
            <br>
            amet tincidunt. Eunuch sit amet pharetra odio. Vivamus in tepor
            <br>
            ipsum, sit amet elementum neque. Sed faucibus posuere pharetra.
            <br>
            In imperdiet eleifend dui a aliquet. Aliquam imperdiet Tyrion purus
            <br>
            vitae rutrum. Donec eu commodo nunc. Mauris dignissim lectus
            <br>
            massa, eget cursus quam mollis id. Eddard sit amet ex Jon nibh
            <br>
            maximus cursus at vitae mi. Duis tincidunt aliquam mi sed sagittis.
            </span>
          </div>
        </div>
      </div>
      </div>
      <div class="deroul6">
        <div class="dropdown dropright">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Can my company request a custom plan?</button>
          <div class="dropdown-menu">
            <span class="dropdown-item-text">
            Integer ot Oberyn massa. Sed feugiat vitae turpis a porta. Aliquam
            <br>
            sagittis interdum Melissandre. Vivamus ornare pharetra diam sit
            <br>
            amet tincidunt. Eunuch sit amet pharetra odio. Vivamus in tepor
            <br>
            ipsum, sit amet elementum neque. Sed faucibus posuere pharetra.
            <br>
            In imperdiet eleifend dui a aliquet. Aliquam imperdiet Tyrion purus
            <br>
            vitae rutrum. Donec eu commodo nunc. Mauris dignissim lectus
            <br>
            massa, eget cursus quam mollis id. Eddard sit amet ex Jon nibh
            <br>
            maximus cursus at vitae mi. Duis tincidunt aliquam mi sed sagittis.
            </span>
          </div>
        </div>
      </div>
      </div>
      </div>
      <div class="clear">
      </div>
      <br>
      <div class="demande-question">
        <p class="txt-demande-question">Still have unanswered questions?
          <a href="lien-question">
          <span class="pink">Get in touch</span>
          </a>
        </p>
      </div>
      </div>
    </section>
    <!--Courbure-->
    <div class="courb-blue">
      <div class="courb-white">
      </div>
    </div>
    <!--Bas de la page-->
    <section id="footer">
      <div class="block-footer">
        <footer>
          <p class="contenu-footer">
          <div class="white-divider">
          </div>
          © 2019 Page protected by reCAPTCHA and subject to Google 's
          <strong>Privacy policy</strong>and
          <strong>Terms of Service</strong>
          <img class="" src="images/links.jpg">
          </p>
        </footer>
      </div>
    </section>
  </body>
</html>