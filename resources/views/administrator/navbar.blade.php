<!-- Navbar -->
<nav class="navbar nav navbar-nav navbar-expand-lg bg-primary fixed-top" color-on-scroll="400"  role="tablist">
  <div class="container">
    <div class="dropdown button-dropdown" style="left: 97%">
      <a class="navbar-brand dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" href="{{ url('/logout') }}" style="font-size: 15.5px;font-weight: 550;">
       <i class="now-ui-icons media-1_button-power"></i> SALIR
      </a>
    </div>
    <li class="nav-item" style="margin-right: 40px;">
      <a class="nav-link" style="white-space: nowrap;" href="#add-Image" data-toggle="tab" role="tablist">
        <i class="now-ui-icons design_image"></i>
        <p>Subir Imágenes</p>
      </a>
    </li>
    <li class="nav-item" style="margin-right: 40px;">
      <a class="nav-link" style="white-space: nowrap;" href="#categories" data-toggle="tab" role="tablist">
        <i class=" now-ui-icons design_bullet-list-67"></i>
        <p>Categorías</p>
      </a>
    </li>
    <li class="nav-item" style="margin-right: 40px;">
        <a class="nav-link" style="white-space: nowrap;" href="#edit-Images" data-toggle="tab" role="tablist">
            <i class=" now-ui-icons ui-2_settings-90"></i>
            <p>Editar Imágenes</p>
        </a>
    </li>
    <div class="navbar-translate">
      <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <ul class="nav navbar-nav" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#add-Image" role="tablist">
                <i class="d-lg-none d-xl-none now-ui-icons design_image"></i>
                <p class="d-lg-none d-xl-none">Subir Imágenes</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#categories" role="tablist">
                <i class="d-lg-none d-xl-none now-ui-icons design_bullet-list-67"></i>
                <p class="d-lg-none d-xl-none">Categorías</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#edit-Images" role="tablist">
                <i class="d-lg-none d-xl-none now-ui-icons ui-2_settings-90"></i>
                <p class="d-lg-none d-xl-none">Editar Imágenes</p>
            </a>
        </li>
        <li class="nav-item" id="log-out">
          <a class="nav-link" href="{{ url('/logout') }}" style="font-size: 13.5px;font-weight: 550;">
            <i class="d-lg-none d-xl-none now-ui-icons media-1_button-power"></i> 
            <p class="d-lg-none d-xl-none">SALIR</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar <--><br><br><br>
