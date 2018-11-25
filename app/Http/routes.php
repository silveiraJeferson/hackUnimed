<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('imagem/arquivo/{nome}', [
    'as' => 'imagem.file',
    'uses' => 'ImagemController@getImagemFile'
]);




Route::controller('/perfil', 'PerfilController');
Route::resource('/especialidades', 'EspecialidadesController');
Route::resource('/beneficiario', 'BeneficiarioController');
Route::controller('/sintomas', 'SintomaController');
Route::controller('/login', 'LoginController');
Route::resource('/', 'UniController');





//Route::get('/', function () {
//    return view('welcome');
//});
