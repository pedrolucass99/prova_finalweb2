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

Route::resource('/doctor', 'DoctorController');
Route::get('doctorRm/{id}', 'DoctorController@destroy');
Route::post('/doctor/{id}', 'DoctorController@update');

Route::get('consultaIndividual/{id}', 'AppointmentController@consultaIndividual');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/consulta', 'AppointmentController');
Route::get('consultaIndividual/consultaRm/{id}', 'AppointmentController@destroy');
Route::post('consulta/{id}', 'AppointmentController@update');

Route::get('pesquisaDoutor', 'DoctorController@pesquisa');

Route::post('/doctorPesquisa', 'DoctorController@pesquisaDoutor');