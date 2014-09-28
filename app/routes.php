<?php

Route::get('/', array('as' => 'inicio', 'uses'=>'HomeController@index'));
Route::get('/listado', array('as' => 'listado', 'uses' => 'HomeController@listado'));
Route::get('/registro', 'HomeController@registro');
Route::get('/acceso', 'HomeController@acceso');
Route::get('/recuperar-password', 'HomeController@recuperarPassword');
Route::get('/detalle-anuncio', array('as' => 'detalle', 'uses' => 'HomeController@detalleAnuncio'));