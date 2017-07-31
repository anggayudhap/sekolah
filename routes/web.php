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

Route::get('testmodel',function(){
	$a = App\post::all();
	return$a;

	});

Route::get('testmodel1',function(){
	$a = App\post::find(1);
	return$a;

	});

Route::get('testmodel2',function(){
	$a = App\post::where('title','like','%Ciri Keluarga %')->get();
	return$a;

	});
Route::get('testmodel3',function(){
	$a = App\post::find(1);
	$a->title = "Ciri Keluarga Sakinah";
	$a->save();
	return$a;

	});

Route::get('testmodel4',function(){
	$a = App\post::find(1);
	$a->delete();
	return$a;

	});

Route::get('testmodel5',function(){
	$a =new App\post();
	$a->title=" -7 Amalan pembuka jodoh";
	$a->content = "sholat malam, sedekah, puasa sunah, silaturahmi, senyu, dan tobat";
	$a->save();
	return$a;

	});

Route::get('cektampilkan',function(){
	return view('layouts.master');
});

// Route::get('/orangtua',function(){
// 	$ortu =  App\Orangtua::all();
// 	foreach ($ortu as $key ) {
// 		echo $key->nama_ayah;
// 		echo " dengan ";
// 		echo $key->nama_ibu;
// 		echo " mempunyai anak ";
// 		foreach ($key->siswa as $data) {
// 		echo "<li>".$data->nama."</li>";
// 		echo "<hr>";
// 		}	
// 	}
// });

Route::get('/coba', 'MyController@index');
Route::get('coba2', 'MyController@tampilmodel');
Route::get('coba3', 'MyController@tampilview');
Route::get('coba4', 'MyController@percobaan');

Route::resource('orangtua','OrangtuaController');
