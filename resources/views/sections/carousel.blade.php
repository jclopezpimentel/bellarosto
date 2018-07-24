<div id="container-carousel">
	<div class="row col-md-12" id="carousel-section">
		<div class="col-md-offset-3 col-md-7">
			<div class="carousel carousel-slider center" id="all-categories">
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
</div>
