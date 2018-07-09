<section id="gallery" class="section-padding wow fadeIn delay-05s">
  <header>
    <h2 align="center">Galería</h2>
  </header>
  <div class="container row">
  	<div class="col-md-3">
      <select class="form-control" id="imageCategory" name="id_categories" style="background-color: white !important">
          <option value="N/A" selected disabled>Selecione una categoría</option> 
        @foreach ($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select> 	
  	</div><br><br>

    <div class="col-md-offset-1 col-md-7" >
    	<div class="carousel carousel-slider center all-categories">
	    	@foreach ($images as $image) 	
		    	@if ($image->imageVisibility == "False")
			    	<a class="carousel-item {{$image->id_categories}}" href="#one!" data-category="{{$image->id_categories}}">
			    		<img src="/img/{{$image->pathImage}}">
			    	</a>
    		@endif
 			@endforeach
			</div>
    </div>
   
  </div>
</section>  
