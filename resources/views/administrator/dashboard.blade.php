<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>
    <!--Fonts and icons-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- Styles -->
    <link rel="stylesheet" href="/css/core/bootstrap.min.css">    
    <link href="/css/now-ui-kit.css" rel="stylesheet" />
  </head>

  <body class="profile-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top" color-on-scroll="400">
        <div class="container">
          <!--  <div class="dropdown button-dropdown">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
            </div> -->
            <div class="dropdown button-dropdown pull-right">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                  <i class="fas fa-sign-out-alt"></i>
                  <a class="navbar-brand" href="{{ url('/logout') }}">
                    SALIR
                  </a>
                </a>
            </div>
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item" id="log-out">
                        <a class="nav-link" href="{{ url('/logout') }}">
                            <i class="fas fa-sign-out-alt"></i>
                            <p class="d-lg-none d-xl-none">SALIR</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar <--><br><br><br>
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
              <h4 class="title text-center">Acciones</h4>
              <div class="nav-align-center">
                  <ul class="nav nav-pills nav-pills-primary" role="tablist">
                      <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#add-Image" role="tablist">
                              <i class="now-ui-icons design_image"></i>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#categories" role="tablist">
                              <i class="now-ui-icons design_bullet-list-67"></i>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#edit-Images" role="tablist">
                              <i class="now-ui-icons ui-2_settings-90"></i>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
          <!-- Tab panes <--><br><br><br><br>
          <div class="tab-content gallery">
              <div class="tab-pane active" id="add-Image" role="tabpanel">
                  <div class="col-md-10 ml-auto mr-auto">
                      <div class="row collections">
                          <div class="col-md-12">
                            <h2>Subir Imágenes</h2>
                            <form id="uploadImageForm">
                              <input type="text" name="imageName" class="form-control" placeholder="Ingrese un nombre para la imágen"/>
                              <input type="file" class="btn btn-info btn-round" name="image" />
                              <div class="checkbox">
                                <input id="imageVisibility" type="checkbox" checked="true">
                                <label for="imageVisibility">Visible</label>
                              </div>
                              <label for="imageCategory">Categoría</label>
                              <select class="form-control" id="imageCategory">
                                <option value="1">ads</option>
                                <option value="2">Ocasdasulto</option>
                              </select>
                              <input type="submit" class="btn btn-success btn-round" value="Subir">
                            </form> 
                          </div>
                      </div>
                  </div>
              </div>
              <div class="tab-pane" id="categories" role="tabpanel">
                  <div class="col-md-10 ml-auto mr-auto">
                      <div class="row collections">
                          <div class="col-md-12">
                            <h2>Categorías</h2>
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Micropigmentación</td>
                                    <td>borrar editar</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Delineado</td>
                                    <td>borrar editar</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Tratamientos especiales</td>
                                    <td>borrar editar</td>
                                  </tr>
                                </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="tab-pane" id="edit-Images" role="tabpanel">
                  <div class="col-md-10 ml-auto mr-auto">
                      <div class="row collections">
                          <div class="col-md-6">
                              <img src="/img/delineado.jpg" alt="" class="img-raised">
                              <img src="/img/0194.png" alt="" class="img-raised">
                          </div>
                          <div class="col-md-6">
                              <img src="/img/login.jpg" alt="" class="img-raised">
                              <img src="/img/thumb3.jpg" class="img-raised">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <!--   Core JS Files   -->
  <script src="/js/app.js"></script>
  <script src="/js/now-ui-kit.js"></script>

</html>
