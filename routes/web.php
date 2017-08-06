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

Route::group(['namespace' => 'Painel'], function(){
	Route::resource('/pa/site', 'SiteController');
        Route::resource('/pa/chamada', 'ChamadaController');
        Route::resource('/pa/edital', 'EditalController');
}); 