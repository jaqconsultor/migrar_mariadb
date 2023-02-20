<?php

  Route::get('/Cruds/Empleados/lista','EmpleadosCrudController@index');
  Route::get('/Cruds/Empleados/CrearNuevo','EmpleadosCrudController@create');
  Route::post('/Cruds/Empleados/GuardarNuevo','EmpleadosCrudController@store');
  Route::get('/Cruds/Empleados/Modificar/{id}','EmpleadosCrudController@show');
  Route::post('/Cruds/Empleados/GuardarEdicion/{id}','EmpleadosCrudController@update');
  Route::get('/Cruds/Empleados/Eliminar/{id}','EmpleadosCrudController@destroy');

