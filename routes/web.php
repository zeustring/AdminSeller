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
Route::get('/','WelcomeController@login');
Route::get('WelcomeCreate','EmpleadosController@WelcomeCreate');

Route::post('loginApp','LoginAppController@LoginApp');
Route::get('logoutApp','LoginAppController@logoutApp');



Route::post('empleado/create','EmpleadosController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['Sesion']], function () {

   	Route::get('dashboard','DashboardController@index');
   	Route::get('Entidades/Estados','EntidadesController@Estados');
	Route::post('Entidades/Estados/Registro','EntidadesController@EstadosRegistro');

	Route::get('Entidades/Ciudades','EntidadesController@Ciudades');
	Route::post('Entidades/Ciudades/Registro','EntidadesController@CiudadesRegistro');

	Route::get('Entidades/Colonias','EntidadesController@Colonias');
	Route::post('Entidades/Colonias/Registro','EntidadesController@ColoniasRegistro');


	Route::get('Sucursales','SucursalesController@index');
	Route::post('Sucursales/Registro','SucursalesController@Registro');

	Route::get('Formularios/SucursalRegistro','FormulariosController@SucursalRegistro');
	Route::get('Formularios/EmpleadoRegistro','FormulariosController@EmpleadoRegistro');
	Route::get('Formularios/Estados','FormulariosController@EstadosFormulario');
	Route::get('Formularios/Ciudades','FormulariosController@CiudadesFormulario');
	Route::get('Formularios/Colonias','FormulariosController@ColoniasFormulario');
	Route::get('Formularios/ClientesRegistro','FormulariosController@ClientesRegistro');
	Route::get('Formularios/OtraCiudad','FormulariosController@OtraCiudad');
	Route::get('Formularios/OtrasColonias/{idCiudad}','FormulariosController@OtrasColonias');
	Route::get('Formularios/EditarCliente/{id}','FormulariosController@EditarCliente');
	Route::get('Formularios/SearchCliente','FormulariosController@SearchCliente');
	Route::get('Formularios/CartaCliente/{id}','FormulariosController@CartaCliente');
	Route::get('Formularios/EditarCarta/{id}','FormulariosController@EditarCarta');
	Route::get('Formularios/SelectTipoBusqueda/{busqueda}','FormulariosController@SelectTipoBusqueda');
	Route::get('Formularios/PagoAzteca','FormulariosController@PagoAzteca');
	Route::get('Formularios/ImgPago/{id}','FormulariosController@ImgPago');

	Route::get('Cartas','CartasController@index');
	Route::post('Cartas/Registro','CartasController@Registro');
	Route::post('Cartas/GenerarCartas/','CartasController@GenerarCartas');
	Route::get('Cartas/Eliminar/{id}','CartasController@Eliminar');
	Route::post('Cartas/Editar','CartasController@Editar');

	Route::get('Empleados','EmpleadosController@index');
	Route::post('Empleados/Registro','EmpleadosController@Registro');

	Route::get('MisClientes','MisClientesController@index');
	Route::post('Clientes/Registro','MisClientesController@Registro');
	Route::post('Clientes/Editar','MisClientesController@Editar');
	Route::post('Clientes/Search','MisClientesController@Search');
	Route::post('MisClientes/ConfirmarRegistro/','MisClientesController@ConfirmarRegistro');

	Route::get('Membresia','MembresiasController@index');
	Route::get('Membresia/FormasPago','MembresiasController@FormasPago');
	Route::post('Membresia/GuardarPago','MembresiasController@GuardarPago');
});
Route::get('Membresia/ValidarPago/{id}','MembresiasController@ValidarPago');
Route::get('Membresia/PagoAutorizar/{id}','MembresiasController@PagoAutorizar');


Route::get('updateApp/sources','UpdateAppController@sources');
Route::post('updateApp/upgradeSources','UpdateAppController@subirZip');



Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});