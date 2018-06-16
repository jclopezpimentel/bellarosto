<?php

/*Página Principal */
Route::get('/', function () {
    return view('welcome');
});

/*
** Administrador
*/

/*Página para inicio de sesion*/
Route::get('/login', function(){
	return view('administrator.login');
});
/*Página Principal*/
Route::get('/dashboard', function(){
	return view('administrator.dashboard');
});

/*
** Controlador Image
*/

/*Ruta a la función UploadImage*/
Route::get('/uploadImage', 'ImageController@uploadImage');

/*Ruta a la función DeleteImage*/
Route::get('/deleteImage', 'ImageController@deleteImage');

/*Ruta a la función updateVisibilityImage*/
Route::get('/updateVisibilityImage', 'ImageController@updateVisibilityImage');

/*Ruta a la función updateCategoryImage*/
Route::get('/updateCategoryImage', 'ImageController@updateCategoryImage');
