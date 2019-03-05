<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products','api\ProductsController@getAll');
Route::get('categories','api\ProductsController@getCategories');
Route::post('/createVenta','VentasController@createVenta');
Route::get('ventas','VentasController@getAllVentas');
Route::get('estadisticas','EstadisticasController@getEstadisticas');
Route::post('ventas/delete','VentasController@delete');

Route::get('ventasmesa','VentasController@getbyMesa');
