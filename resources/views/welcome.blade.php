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
    <link rel="stylesheet" type="text/css" href="/css/materialize.css">
  </head>
  <body>
    <div class="loader"></div>
    <div class="flex-center position-ref full-height" id="myDiv">
    
      @include('sections.header')

      @include('sections.service')

      @include('sections.knowMore')

      @include('sections.gallery')

      <div class="logo-certificacion logo-icon" style="right: auto;cursor: default;">
        <img src="/img/0194.png" width="100%" alt="Certificado">
      </div>

      @include('sections.contactme')

    </div>
  </body>
  <script src="/js/app.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.min.js"></script>
  <script src="/js/wow.js"></script>
  <script src="/js/jquery.bxslider.min.js"></script>
  <script src="/js/custom.js"></script>  
  <script src="/js/materialize.js"></script>
  <script src="/js/cards.js"></script>

</html>
