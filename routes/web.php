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


Route::get('/about',function() {
	return '<h1>Halo</h1>'.
	'Selamat Datang Di Webapp Saya<br>'.
	'Laravel,emang keren. ';
});

Route::get('latihan',function(){
	return view('laravel');
});

Route::get('about/{id}',function($a){
	return 'Ini Halaman About '.$a;
});

Route::get('about/{id}',function(){
	$a='jhon';
	return 'Ini halaman about '.$a;
});
