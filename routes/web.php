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

Route::resource('maquina/reparo', 'MaquinaController');

Route::resource('maquina/rede', 'RedeController');

Route::resource('maquina/aguardo', 'AguardoController');

Route::get('arquivo_pdf', 'PdfController@index');

Route::get('arquivo_pdf/pdf', 'PdfController@pdf');