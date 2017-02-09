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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('user/{id}', function ($id) {
//     return 'User :'.$id;
// });
// Route::get('user/{id}/{name}', function ($id, $name) {
//     return view('index', compact('id', 'name'));
// });
// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });

// Route::get('user/{name?}', function ($name = 'John') {
//     return $name;
// });
Route::get('/belajar', 'BelajarController@index');
Route::get('/belajar/html', 'BelajarController@getPage');

Route::get('/one-to-one', 'BelajarController@getOne');
Route::get('/profile/{nama}', 'BelajarController@hasOne');
Route::get('/one-to-many', 'BelajarController@getOneMany');
Route::get('/many-to-one', 'BelajarController@getManyOne');
Route::get('/many-to-many/{name?}', 'BelajarController@getManyToMany');
Route::get('/has-many-through/{id?}', 'BelajarController@hasManyThrough');

Route::group(['prefix' => 'kendaraan'], function(){

	Route::get('/', 'KendaraanController@index');
	Route::get('/create', 'KendaraanController@create');
	Route::post('/store', 'KendaraanController@store');
	Route::get('/show/{id}', 'KendaraanController@show');
	Route::post('/update/{id}', 'KendaraanController@update');
	Route::post('/destroy/{id}', 'KendaraanController@destroy');

});
