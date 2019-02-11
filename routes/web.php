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
Route::resource('/inventario','InventarioController');

Route::get('/pdf', function(){

	$now = new \DateTime();
	$data = "datoo jeje";
	$pdf = PDF::loadView('tickets', ['now' => $now ]);


	return $pdf->download('ticket.pdf');
})->name('pdf');

Route::get('/ticket','HomeController@ticket')->name('ticket');
Route::get('/reportes','ReportesController@index')->name('reportes');
Route::get('/devoluciones','HomeController@devoluciones')->name('devoluciones');
Route::get('/profile','HomeController@profile')->name('profile');