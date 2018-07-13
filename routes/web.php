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

/*
Route::get('/', function () {

    
    return view('welcome');
});*/
Route::get('/', 'EquiposController@show'  );
Route::get('/equipo/{id}', 'EquiposController@indexbuscando'  );
Route::post('/search/event', 'EquiposController@search');
   


Auth::routes();

Route::get('/home', 'EquiposController@index')->name('equipos');

Route::group(['prefix' => ''], function(){
    Route::resource('equipos', 'EquiposController');
});
Route::get('/pdf/{id}', 'PdfController@index');