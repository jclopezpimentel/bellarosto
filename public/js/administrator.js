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
      },
      complete: function(e, xhr, settings){
        if(e.status === 200){
          alert('Datos Guardados correctamente.');
          $("#edit-Images").load(" #edit-Images");
        }else{
          alert('No se han podido guardar los cambios.');
        }
        $(".btn").removeAttr('disabled');
      },
      error: function (textStatus, errorThrown) {
        alert('No se han podido guardar los cambios.');
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
      },
    })
    .always(function(e) {
      if (e.status === 200){
        alert('Eliminado Exitosamente');  
        $("#edit-Images").load(" #edit-Images");
      }else{
        alert('No se ha podido eliminar');  
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
      },
    })
    .always(function(e) {
      if (e.status === 200){
        alert('Actualizado Exitosamente');  
        $("#edit-Images").load(" #edit-Images");
      }else{
        alert('No se ha podido actualizar');  
      }
      $(".btn").removeAttr('disabled');
    });
  });
});
