<?php
Route::get('/', ['as'=>'index','uses'=>'PagesControllers@home']);
Route::get('admin', ['as'=>'admin','uses'=>'AdminController@admin']);
Route::get('principal', ['as'=>'admin','uses'=>'AdminController@principal']);



Route::resource('slider', 'SliderController');

Route::get('images/{id}',['as'=>'imagen.slider','uses'=>'ImageController@index']);
Route::post('update/{id}',['as'=>'imagen.edit','uses'=> 'ImageController@update']);

Route::resource('nosotros', 'NosotrosController');
Route::resource('asesorias', 'AsesoriasController');

Route::get('imagesas/{id}',['as'=>'imagen.asesoria','uses'=>'ImgasesoriasController@index']);
Route::post('updateas/{id}',['as'=>'imagen.editas','uses'=> 'ImgasesoriasController@update']);

Route::resource('fotos', 'FotosController');

Route::get('activofoto/{id}',['as'=>'activo.foto','uses'=>'FotosController@activar']);
Route::get('inactivofoto/{id}',['as'=>'inactivo.foto','uses'=> 'FotosController@inactivo']);

Route::get('sesion',['as'=>'sesion.start','uses'=> 'LoginController@sesion']);


Route::resource('users', 'UsersController');

Route::auth();

Route::get('/home', 'HomeController@index');
