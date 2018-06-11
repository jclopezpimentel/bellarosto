<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bela Rostro</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/css/cards.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
  </head>
  <body>
    <div class="loader"></div>
    <div class="flex-center position-ref full-height" id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <img class="navbar-brand" href="#" src="/img/logo_bela_rosto_png.png" alt="Logo">
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  @if (Route::has('login'))
                    @auth
                    <li class="active"><a href="#main-header">Inicio</a></li>
                  @else
                      <li><a href="{{ route('login') }}">Login</a></li>
                      <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                    @endauth
                  @endif
                  <li class="active"><a href="#main-header">Inicio</a></li>
                  <li class=""><a href="#service">Servicios</a></li>
                  <li class=""><a href="#knowMore">Conozca Más</a></li>
                  <li class=""><a href="#gallery">Galería</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h2 class="bnr-sub-title">Artist Brow Magally Pimentel</h2>
                <p class="bnr-para">La Dermopigmetación o Micropigmentación es un procedimiento utilizado desde la antigüedad<br>a través de la cual se colocaban partículas de diversos materiales debajo de la<br> superficie cutánea con el fin de obtener dibujos “permanentes”</p>

                <div class="overlay-detail">
                  <a href="#service"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="service" class="section-padding wow fadeIn delay-05s">
      <div class="cards">
        <div class="card">
          <img src="http://s4c.cymru/temp/wave1.jpg">
          <div class="card-title">
            <a href="#" class="toggle-info btn">
              <span class="left"></span>
              <span class="right"></span>
            </a>
            <h4>Delineados permantes</h4>
          </div>
          <div class="card-flap flap1">
            <div class="card-description">
              <ul>
                <li class="list-expandend"><a>Ceja compacta</a></li>
                <li class="list-expandend"><a>Ceja sombreada</a></li>
                <li class="list-expandend"><a>Ceja pelo a pelo</a></li>
                <li class="list-expandend"><a>Linea negra en párpado superior e inferior</a></li>
                <li class="list-expandend"><a>Relleno entre pestañas superior e inferior (efecto pestaña)</a></li>
                <li class="list-expandend"><a>Relleno en área conjuntiva en ojos superior e inferior</a></li>
                <li class="list-expandend"><a>Iluminación o linea french</a></li>
                <li class="list-expandend"><a>Perfilado de labios</a></li>
                <li class="list-expandend"><a>Relleno de labios un solo tono o 3d</a></li>
                <li class="list-expandend"><a>Efecto rubor</a></li>
                <li class="list-expandend"><a>Lunares</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="card">
          <img src="http://s4c.cymru/temp/wave1.jpg">
          <div class="card-title">
            <a href="#" class="toggle-info btn">
              <span class="left"></span>
              <span class="right"></span>
            </a>
            <h4>Correciones</h4>
          </div>
          <div class="card-flap flap1">
            <div class="card-description">
              <ul>
                <li class="list-expandend"><a>Corrección en color ( negras, grises, rojas, azules, verdes)</a></li>
                <li class="list-expandend"><a>Rediseño de los delineados en cejas ojos y labios</a></li>
                <li class="list-expandend"><a>Dermodespigmentacion en cejas y ojos</a></li>
                <li class="list-expandend"><a>Despigmentacion y camuflaje en tatuajes</a></li>
                <li class="list-expandend"><a>Corregimos cejas mal hechas</a></li>
              </ul>
            </div>

          </div>
        </div>

        <div class="card">
          <img src="http://s4c.cymru/temp/wave1.jpg">
          <div class="card-title">
            <a href="#" class="toggle-info btn">
              <span class="left"></span>
              <span class="right"></span>
            </a>
            <h4>Servicios especiales tratamientos paramedicos</h4>
          </div>
          <div class="card-flap flap1">
            <div class="card-description">
              This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
            </div>
            <div class="card-flap flap2">
              <div class="card-actions">
                <a href="#" class="btn">Read more</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <img src="http://s4c.cymru/temp/wave1.jpg">
          <div class="card-title">
            <a href="#" class="toggle-info btn">
              <span class="left"></span>
              <span class="right"></span>
            </a>
            <h4>Tratamientos faciales con consulta previa</h4>
          </div>
          <div class="card-flap flap1">
            <div class="card-description">
              This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
            </div>
            <div class="card-flap flap2">
              <div class="card-actions">
                <a href="#" class="btn">Read more</a>
              </div>
            </div>
          </div>
        </div>
     
      </div>
    </section>

    <section id="knowMore" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser01.png">
              </div>
              <h3 class="pad-bt15">Creative Concept</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser02.png">
              </div>
              <h3 class="pad-bt15">Amazing Design</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser03.png">
              </div>
              <h3 class="pad-bt15">Cost effective</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser04.png">
              </div>
              <h3 class="pad-bt15">Secure</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section id="gallery" class="section-padding wow fadeIn delay-05s">
      
    </section>  


    <div class="chat-wrap">
      <div class="contact-icon">
        <div><span>Contáctanos!</span></div>
        <img src="/img/ser02.png" alt="Contáctanos">
      </div>
    </div>
    <span class="overlay"></span>
    <section class="contactme">
      <div id="fancy-inputs">
        <form action="" method="POST">
          <img src="/img/ser02.png" alt="Contáctanos">
          <p>Contáctanos!</p>
          <label class="input">
            <input class="inputs" type="text" name="nom" required="">
            <span><span>Nombre</span></span>
          </label>

          <label class="input">
            <input class="inputs" type="email" name="mail" required="">
            <span><span>Email</span></span>
          </label>

          <label class="input textarea">
            <textarea class="inputs" required=""></textarea>
            <span><span>Mensaje</span></span>
          </label>

          <input type="submit" value="Enviar" class="btn cta">
        </form>
      </div>
    </section>

    </div>
  </body>
  <script src="/js/app.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.min.js"></script>
  <script src="/js/wow.js"></script>
  <script src="/js/jquery.bxslider.min.js"></script>
  <script src="/js/custom.js"></script>
  <script src="/js/cards.js"></script>
</html>
