<section id="gallery" class="section-padding wow fadeIn delay-05s">
  <header>
    <h2 align="center">Galería</h2>
  </header>
  <div class="row">
  	<div class="col-md-3 buttons-large">
  		@foreach ($categories as $category)
	  		<div id="{{$category->id}}" class="flat-button">{{$category->name}}</div><br>
  		@endforeach
  	</div>

    <div class="col-md-9 responsive-img " >
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

		<center>
			<div class="col-md-3 buttons-small" style="display: none;">
		  		@foreach ($categories as $category)
			  		<div id="{{$category->id}}}" class="flat-button">{{$category->name}}</div><br>
		  		@endforeach			
			</div>			
		</center>
   
  </div>
</section>  
