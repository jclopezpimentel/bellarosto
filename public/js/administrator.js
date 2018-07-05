$(document).ready(function(){

  $('[data-toggle="tooltip"]').tooltip();

  var alto = (screen.height) - (screen.availHeight);
  var barra = screen.availHeight - (alto*2) - (alto/2);

  $(".sidebar-collapse").height(barra);
  
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
        window.location.href = '/dashboard';
      }else{
        alert("Datos incorrectos");
        window.location.href = '/login';
      }
    });
  });

  jQuery('input[type=file]').change(function(){
		var filename = jQuery(this).val().split('\\').pop();
		var idname = jQuery(this).attr('id');
		console.log(jQuery(this));
		console.log(filename);
		console.log(idname);
		jQuery('span.'+idname).next().find('span').html(filename);
  });

  $("#formSaveCategory").on('submit', function(event) {
  	event.preventDefault();

  	var categoryName = $('#nameCategory').prop('value');

  	if (categoryName != null && categoryName.length > 0){

  		$.ajax({
  			url: '/saveCategory',
  			type: 'POST',
	      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
  			dataType: 'json',
  			data: {categoryName: categoryName},
  		})
  		.always(function(e) {
  			if (e.status === 200){
	  			alert('Guardado Exitosamente');	
	  			$("#categoryModal").modal('hide');
	  			$("#categories").load(" #categories");
  			}else{
	  			alert('No se ha podido guardar');	
  			}

  		});
  	}else {
  		alert('Escriba algo');
   	}
  });

  $("#categories").on('click', '.deleteCategory', function(event) {
  	event.preventDefault();

  	idCategory = $(this).attr('id');

  	$.ajax({
  		url: '/deleteCategory',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
  		type: 'POST',
  		dataType: 'json',
  		data: {idCategory: idCategory},
  	})
		.always(function(e) {
			if (e.status === 200){
  			alert('Eliminado Exitosamente');	
  			$("#categories").load(" #categories");
			}else{
  			alert('No se ha podido eliminar');	
			}
		});
  });


});
