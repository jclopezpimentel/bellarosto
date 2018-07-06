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
			    	<a class="carousel-item" href="#one!">
			    		<img src="/img/{{$image->pathImage}}">
			    	</a>
    		@endif
 			@endforeach

			</div>

	  	<div class="carousel carousel-slider center first-category">
		    <a class="carousel-item" href="#one!"><img src="https://t2.uc.ltmcdn.com/images/1/0/9/img_como_descargar_fuentes_de_dafont_25901_600.jpg"></a>
		    <a class="carousel-item" href="#two!"><img src="https://www.dafont.com/img/illustration/b/e/beautify_script.png"></a>
		    <a class="carousel-item" href="#four!"><img src="https://www.dafont.com/img/illustration/m/o/mochary.png"></a>
		</div>

		<div class="carousel carousel-slider center second-category">
		    <a class="carousel-item" href="#three!"><img src="https://www.dafont.com/img/illustration/l/a/la_cithare.png"></a>
		    <a class="carousel-item" href="#four!"><img src="https://www.dafont.com/img/illustration/m/o/mochary.png"></a>
		</div>

		<div class="carousel carousel-slider center three-category">
		    <a class="carousel-item" href="#one!"><img src="https://t2.uc.ltmcdn.com/images/1/0/9/img_como_descargar_fuentes_de_dafont_25901_600.jpg"></a>
		    <a class="carousel-item" href="#two!"><img src="https://www.dafont.com/img/illustration/b/e/beautify_script.png"></a>
		</div>

		<div class="carousel carousel-slider center fourth-category">
		    <a class="carousel-item" href="#one!"><img src="https://t2.uc.ltmcdn.com/images/1/0/9/img_como_descargar_fuentes_de_dafont_25901_600.jpg"></a>
		    <a class="carousel-item" href="#two!"><img src="https://www.dafont.com/img/illustration/b/e/beautify_script.png"></a>
		    <a class="carousel-item" href="#three!"><img src="https://www.dafont.com/img/illustration/l/a/la_cithare.png"></a>
		    <a class="carousel-item" href="#four!"><img src="https://www.dafont.com/img/illustration/m/o/mochary.png"></a>
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
