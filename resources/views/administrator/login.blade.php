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
  </head>
  <body class="login-page sidebar-collapse">
    <div class="page-header" filter-color="orange">
      <div class="page-header-image" style="background-image:url(/img/login.jpg)"></div>
      <div class="container">
        <div class="col-md-4 content-center">
          <div class="card card-login card-plain">
            <form class="form" id="formSubmitLogin">
              <div class="header header-primary text-center">
                <img src="/img/logo_bela_rosto_png_sintexto.png"  alt="Logo">
              </div>
              <div class="content">
                <div class="input-group form-group-no-border input-lg">
                  <span class="input-group-addon">
                    <i class="now-ui-icons users_circle-08"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Usuario" name="username" />
                </div>
                <div class="input-group form-group-no-border input-lg">
                  <span class="input-group-addon">
                    <i class="now-ui-icons text_caps-small"></i>
                  </span>
                  <input type="password" placeholder="Contraseña" class="form-control" name="password" />
                </div>
              </div>
              <div class="footer text-center">
                <input value="Iniciar" id="btnSubmit" class="btn btn-primary btn-round btn-lg btn-block" type="submit">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  <!--Core JS Files-->
  <script src="/js/app.js"></script>
  <script src="/js/now-ui-kit.js"></script>
  <script>
    $(document).ready(function(){
      $("#formSubmitLogin").on('submit', function(event) {
        event.preventDefault();

        $.ajax({
          url: '/checkUser',
          type: 'post',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: new FormData(this), 
          processData: false,
          contentType: false,
        })
        .done(function(data) {
          if (data == 1) {
            window.location.href = '{{url("/dashboard")}}';
          }else{
            alert("Datos incorrectos");
            window.location.href = '{{url("/login")}}';
          }
        })
        .fail(function() {
          window.location.href = '{{url("/login")}}';
        });        
      });
    });
  </script>
</html>
