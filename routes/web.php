<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('sections/header', function(){
    return view("sections.header");
});

Route::get('sections/service', function(){
    return view("sections.service");
});

Route::get('/sections/knowMore', function(){
    return view("sections.knowMore");
});

Route::get('/sections/gallery', function(){
    return view("sections.gallery");
});

Route::get('/sections/contactme', function(){
    return view("sections.contactme");
});
