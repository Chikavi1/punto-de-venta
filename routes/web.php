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

Route::get('/home', 'VentasController@index')->name('home')->middleware('auth');
Route::get('/pdf', 'ReportesController@pdf')->name('pdf');
Route::get('/ticket','HomeController@ticket')->name('ticket')->middleware('auth');;
Route::get('/reportes','ReportesController@index')->name('reportes')->middleware('auth');;
Route::get('/devoluciones','DevolucionesController@index')->name('devoluciones')->middleware('auth');;
Route::get('/estadistica','EstadisticasController@index')->name('estadistica');


Route::get('/profile','UserController@profile')->name('profile')->middleware('auth');;
Route::get('/profile/{id}/edit','UserController@edit')->name('edit')->middleware('auth');
Route::post('/profile/{id}','UserController@update')->name('user.update')->middleware('auth');


Route::resource('/ventas','VentasController');
Route::resource('/products','ProductsController')->middleware('auth');
Route::resource('/categories','CategoriesController')->middleware('auth');

Route::get('/ticketchico',function(){
	return view('reportes.ticket');
});