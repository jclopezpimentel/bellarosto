<section id="gallery" class="section-padding wow fadeIn delay-05s">
  <header>
    <h2 align="center">Galería</h2>
  </header>
  <div class="container">
  	<div class="row col-md-12">
	  	<div class=" col-md-offset-5 col-md-3 ">
	      <select class="form-control" id="imageCategory" name="id_categories" style="background-color: #43291d !important; border-radius: 4px; border-color: #806810; color: white !important;">
	          <option value="N/A" selected disabled>Selecione una categoría</option> 
	          <option value="0">Todas las categorías</option>
	        @foreach ($categories as $category)
	          <option value="{{$category->id}}">{{$category->name}}</option>
	        @endforeach
	      </select> 	
	  	</div>  		
  	</div><br><br>
	
	@include('sections.carousel')
  
  </div>
</section>  
