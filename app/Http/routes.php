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
Route::resource('/login','LoginController');
Route::get('logout', 'LoginController@logout');


    Route::resource('administrador','AdministradorController');
    Route::resource('/usuario', 'UsuarioController');
    Route::resource('/cliente', 'ClienteController');
    Route::resource('/tipo_equipo', 'TipoEquipoController');
    Route::resource('/marca', 'MarcaController');
    Route::resource('/modelo', 'ModeloController');
    Route::resource('/tipo', 'TipoController');
    Route::resource('/material', 'MaterialController');
    Route::resource('/unidad', 'UnidadController');
    Route::resource('/condicion', 'CondicionController');
    Route::resource('/f4','F4Controller');
    Route::get('descargar_f4/{id}','F4Controller@descargar_f4');
    Route::resource('/f5','F5Controller');
    Route::get('descargar_f5','F5Controller@descargar_f5');
    Route::resource('/f37', 'F37Controller');
    Route::resource('/valorizado','ValorizadoController');
    Route::resource('/cotizado','CotizadoController');
    Route::resource('/perdida','PerdidaController');
    Route::resource('/finalizado','FinalizadoController');
    Route::resource('/realizado','RealizadoController');
    Route::resource('/basculas','GraficaController');
    Route::resource('/balanzas','Grafica2Controller');
    Route::resource('/masas','Grafica3Controller');
    Route::resource('/pesometros','Grafica4Controller');
    Route::get('grafica_registros/{anio}/{mes}', 'GraficaController@registros_mes');



    Route::resource('/empleado', 'EmpleadoController');





Route::resource('/administrativo', 'AdministrativoController');
Route::resource('/secretaria', 'SecretariaController');


