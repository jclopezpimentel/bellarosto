@extends('administrator.app')
@section('title','Login')
@section('content')
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
@endsection
