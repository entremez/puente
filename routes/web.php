<?php

Route::get('/', 'ControladorPrueba@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
