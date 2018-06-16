<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <!--Fonts and icons-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- Styles -->
    <link rel="stylesheet" href="/css/core/bootstrap.min.css">    
    <link href="/css/now-ui-kit.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/demo.css">
  </head>
<body class="login-page sidebar-collapse">
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(/img/login.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="" action="">
                        <div class="header header-primary text-center">
                            <div class="logo-containers">
                                <img src="/img/logo_bela_rosto_png_sintexto.png"  alt="Logo">
                            </div>
                        </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Usuario">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input type="password" placeholder="Contraseña" class="form-control" />
                            </div>
                        </div>
                        <div class="footer text-center">
                            <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">Iniciar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
  <!--Core JS Files-->
  <script src="/js/core/jquery.3.2.1.min.js"></script>
  <script src="/js/core/popper.min.js"></script>
  <script src="/js/core/bootstrap.min.js"></script> 
  <script src="/js/plugins/bootstrap-switch.js"></script>
  <script src="/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <script src="/js/now-ui-kit.js" type="text/javascript"></script>


</html>
