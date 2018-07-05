@extends('administrator.app')
@section('title','Dashboard')
@section('content')
  <body class="profile-page sidebar-collapse">
    
    @include('administrator.navbar')
    <div class="wrapper">
      <div class="container">
        <div class="row"><br><br><br><br>

          <!-- Tab panes <-->
          <div class="container tab-content gallery">

            @include('administrator.addImages')

            @include('administrator.categories')

            @include('administrator.editImages')

            @include('administrator.modal')

          </div>
        </div>
      </div>
    </div>
  </body>

@endsection
