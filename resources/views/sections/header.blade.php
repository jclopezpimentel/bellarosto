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
