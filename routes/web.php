<?php

/*Página Principal */
Route::get('/', 'AdministratorController@principal');

/*
** Administrador
*/

/*Página para inicio de sesion*/
Route::get('/login', function(){
	return view('administrator.login');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

/*Página Principal*/
Route::get('/dashboard', 'AdministratorController@dashboard');
/*
** Controlador Administrador
*/

Route::post('/checkUser', 'AdministratorController@checkUser');

/*
** Controlador Image
*/

/*Ruta a la función UploadImage*/
Route::post('/uploadImage', 'ImageController@uploadImage');

/*Ruta a la función DeleteImage*/
Route::post('/deleteImage', 'ImageController@deleteImage');

/*Ruta a la función updateVisibilityImage*/
Route::post('/updateVisibilityImage', 'ImageController@updateVisibilityImage');

/*Ruta a la función updateCategoryImage*/
Route::get('/updateCategoryImage', 'ImageController@updateCategoryImage');




Route::post('/saveCategory', 'AdministratorController@saveCategory');

Route::post('/deleteCategory', 'AdministratorController@deleteCategory');
