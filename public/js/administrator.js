$(document).ready(function(){

  $('[data-toggle="tooltip"]').tooltip();
  
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
        beforeSend: function( xhr ) {
          $(".btn").attr('disabled','true');
          alertify.message('Guardando categoría...');
        }
  		})
  		.always(function(e) {
  			if (e.status === 200){
	  			alertify.success('Guardado Exitosamente');	
	  			$("#categoryModal").modal('hide');
	  			$("#categories").load(" #categories");
          $(".imageCategory").load(" .imageCategory");
  			}else{
	  			alertify.error('No se ha podido guardar');	
  			}
        $(".btn").removeAttr('disabled');
  		});
  	}else {
  		alertify.warning('Escriba algo');
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
      beforeSend: function( xhr ) {
        $(".btn").attr('disabled','true');
        alertify.message('Eliminando Categoría...');
      },
  	})
		.always(function(e) {
			if (e == '1'){
  			alertify.error('Eliminado Exitosamente');	
  			$("#categories").load(" #categories");
			}else{
  			alertify.warning('No se ha podido eliminar, la categoría contiene imagenes');	
			}
      $(".btn").removeAttr('disabled');
		});
  });

  $("#uploadImageForm").on('submit', function(event) {
    event.preventDefault();

    $.ajax({
      url: "/uploadImage", // Url to which the request is send
      type: "POST",             // Type of request to be send, called as method
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
      contentType: false,       // The content type used when sending data to the server.
      cache: false,             // To unable request pages to be cached
      processData:false,        // To send DOMDocument or non processed data file it is set to false
      beforeSend: function( xhr ) {
        $(".btn").attr('disabled','true');
        alertify.message('Subiendo imágen...');
      },
      complete: function(e, xhr, settings){
        if(e.responseText == "Success"){
          alertify.success('Datos Guardados correctamente.');
          $("#edit-Images").load(" #edit-Images");
        }else{
          alertify.error(e.responseText);
        }
        $(".btn").removeAttr('disabled');
      },
      error: function (textStatus, errorThrown) {
        alertify.error('No se han podido guardar los cambios. '+textStatus);
        $(".btn").removeAttr('disabled');
      }
    });
  });

  $("#edit-Images").on('click', '.deleteImage', function(event) {
    event.preventDefault();

    idImage = $(this).attr('id');

    $.ajax({
      url: '/deleteImage',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      type: 'POST',
      dataType: 'json',
      data: {idImage: idImage},
      beforeSend: function( xhr ) {
        $(".btn").attr('disabled','true');
        alertify.message('Eliminando imágen...');
      },
    })
    .always(function(e) {
      if (e.status === 200){
        alertify.error('Eliminado Exitosamente');  
        $("#edit-Images").load(" #edit-Images");
      }else{
        alertify.warning('No se ha podido eliminar');  
      }
      $(".btn").removeAttr('disabled');
    });
  });

  $("#edit-Images").on('click', '.updateVisibilityImage', function(event) {
    event.preventDefault();

    idImage = $(this).attr('id');

    $.ajax({
      url: '/updateVisibilityImage',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      type: 'POST',
      dataType: 'json',
      data: {idImage: idImage},
      beforeSend: function( xhr ) {
        $(".btn").attr('disabled','true');
        alertify.success('Actualizando visibilidad...');
      },
    })
    .always(function(e) {
      if (e.status === 200){
        alertify.success('Actualizado Exitosamente');  
        $("#edit-Images").load(" #edit-Images");
      }else{
        alertify.error('No se ha podido actualizar');  
      }
      $(".btn").removeAttr('disabled');
    });
  });
});
