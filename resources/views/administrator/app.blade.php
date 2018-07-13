<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
  <!--Fonts and icons-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <!-- Styles -->
  <link rel="stylesheet" href="/css/core/bootstrap.min.css">    
  <link rel="stylesheet" href="/css/now-ui-kit.css" />
  <link rel="stylesheet" href="/css/alertify.css">
  <link rel="stylesheet" href="/css/semantic.min.css">
  <style>
    label{
      margin-top: .5rem;
    }
  </style>
    <!--   Core JS Files   -->
  <script src="/js/app.js"></script>
  <script src="/js/now-ui-kit.js"></script>
  <script src="/js/alertify.min.js"></script> 
  <script src="/js/administrator.js"></script>

</head>

	@yield('content')

</html>
