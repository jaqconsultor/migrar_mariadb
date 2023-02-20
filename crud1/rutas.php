<?php

  Route::get('/Cruds/Sqlite_sequence/lista','Sqlite_sequenceCrudController@index');
  Route::get('/Cruds/Sqlite_sequence/CrearNuevo','Sqlite_sequenceCrudController@create');
  Route::post('/Cruds/Sqlite_sequence/GuardarNuevo','Sqlite_sequenceCrudController@store');
  Route::get('/Cruds/Sqlite_sequence/Modificar/{id}','Sqlite_sequenceCrudController@show');
  Route::post('/Cruds/Sqlite_sequence/GuardarEdicion/{id}','Sqlite_sequenceCrudController@update');
  Route::get('/Cruds/Sqlite_sequence/Eliminar/{id}','Sqlite_sequenceCrudController@destroy');


  Route::get('/Cruds/Bancos/lista','BancosCrudController@index');
  Route::get('/Cruds/Bancos/CrearNuevo','BancosCrudController@create');
  Route::post('/Cruds/Bancos/GuardarNuevo','BancosCrudController@store');
  Route::get('/Cruds/Bancos/Modificar/{id}','BancosCrudController@show');
  Route::post('/Cruds/Bancos/GuardarEdicion/{id}','BancosCrudController@update');
  Route::get('/Cruds/Bancos/Eliminar/{id}','BancosCrudController@destroy');

