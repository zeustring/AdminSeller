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
	Route::post('Entidades/Colonias/Editar','EntidadesController@ColoniasEditar');
	Route::post('Entidades/Ciudades/Editar','EntidadesController@CiudadesEditar');
    Route::post('Entidades/Estados/Editar','EntidadesController@EstadosEditar');

	Route::get('Sucursales','SucursalesController@index');
	Route::post('Sucursales/Registro','SucursalesController@Registro');
	Route::post('Sucursales/Editar','SucursalesController@Editar');

	Route::get('Formularios/SucursalRegistro','FormulariosController@SucursalRegistro');
	Route::get('Formularios/SucursalEditar/{id}','FormulariosController@SucursalEditar');
	Route::get('Formularios/EmpleadoRegistro','FormulariosController@EmpleadoRegistro');
	Route::get('Formularios/EmpleadoEditar/{id}','FormulariosController@EmpleadoEditar');
	Route::get('Formularios/EstadosRegistro','FormulariosController@EstadosRegistro');
	Route::get('Formularios/Ciudades','FormulariosController@CiudadesFormulario');
	Route::get('Formularios/ColoniasRegistrar','FormulariosController@ColoniasRegistrar');
	Route::get('Formularios/ColoniasEditar/{id}','FormulariosController@ColoniasEditar');
	Route::get('Formularios/CiudadesEditar/{id}','FormulariosController@CiudadesEditar');
	Route::get('Formularios/EstadosEditar/{id}','FormulariosController@EstadosEditar');
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
	Route::get('Formularios/CambioTelefono','FormulariosController@CambioTelefono');
	Route::get('Formularios/CambioEmail','FormulariosController@CambioEmail');
	Route::get('Formularios/CambioNip','FormulariosController@CambioNip');
	Route::get('Formularios/CartaPredefinida','FormulariosController@CartaPredefinida');
	Route::get('Formularios/TipoCarta','FormulariosController@TipoCarta');

	Route::get('Formularios/PendienteCliente/{id}','FormulariosController@PendienteCliente');

	Route::get('Formularios/PromotorMarcaRegistro','FormulariosController@PromotorMarcaRegistro');
	Route::get('Formularios/PromotorMarcaEditar/{id}','FormulariosController@PromotorMarcaEditar');

	Route::get('Cartas','CartasController@index');
	Route::post('Cartas/Registro','CartasController@Registro');
	Route::post('Cartas/GenerarCartas/','CartasController@GenerarCartas');
	Route::get('Cartas/Eliminar/{id}','CartasController@Eliminar');
	Route::post('Cartas/Editar','CartasController@Editar');

	Route::get('Empleados','EmpleadosController@index');
	Route::post('Empleados/Registro','EmpleadosController@Registro');
	Route::post('Empleados/Editar','EmpleadosController@Editar');

	Route::get('MisClientes','MisClientesController@index');
	Route::post('Clientes/Registro','MisClientesController@Registro');
	Route::post('Clientes/Editar','MisClientesController@Editar');
	Route::post('Clientes/Search','MisClientesController@Search');
	Route::get('Clientes/Search/{id}','MisClientesController@SearchGet');
	Route::post('MisClientes/ConfirmarRegistro/','MisClientesController@ConfirmarRegistro');

	Route::get('Membresia','MembresiasController@index');
	Route::get('Membresia/FormasPago','MembresiasController@FormasPago');
	Route::post('Membresia/GuardarPago','MembresiasController@GuardarPago');
	Route::get('Configuraciones','ConfiguracionesController@index');
	Route::post('Configuraciones/CambioTelefono','ConfiguracionesController@CambioTelefono');
	Route::post('Configuraciones/CambioEmail','ConfiguracionesController@CambioEmail');
	Route::post('Configuraciones/CambioNip','ConfiguracionesController@CambioNip');
	Route::post('Configuraciones/TipoCarta','ConfiguracionesController@TipoCarta');

	Route::get('PromotorMarca','PromotorMarcaController@index');
	Route::post('PromotorMarca/Registro','PromotorMarcaController@Registro');
	Route::post('PromotorMarca/Editar/{id}','PromotorMarcaController@Editar');

	Route::post('Pendientes/Registro','PendientesController@registro');
	Route::get('Pendientes','PendientesController@index');
});
Route::get('Membresia/ValidarPago/{id}','MembresiasController@ValidarPago');
Route::get('Membresia/PagoAutorizar/{id}','MembresiasController@PagoAutorizar');


Route::get('updateApp/sources','UpdateAppController@sources');
Route::post('updateApp/upgradeSources','UpdateAppController@subirZip');



Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});