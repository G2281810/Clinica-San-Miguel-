<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ConsultasController;
use App\Http\Controllers\MedicosController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\CuponesController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\RecetasController;

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
// Route::get('dashboard', function () {
//     return view('plantilla');
// });

///// Página web ////
Route::get('/',[LoginController::class,'pagina'])->name('/');

///// Login /////
Route::get('vistalogin',[LoginController::class,'vistalogin'])->name('vistalogin');
Route::get('plantilla',[LoginController::class,'plantilla'])->name('plantilla');
Route::get('alta_usuarios',[UsuariosController::class,'alta_usuarios'])->name('alta_usuarios');
Route::post('guarda_usuarios',[UsuariosController::class,'guarda_usuarios'])->name('guarda_usuarios');

/// Iniciar sesion ///
Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('valida',[LoginController::class,'valida'])->name('valida');
Route::get('logout',[LoginController::class,'logout'])->name('logout');
Route::get('pacientes',[LoginController::class,'pacientes'])->name('pacientes');
Route::get('principal',[LoginController::class,'principal'])->name('principal');
Route::get('pacientesusuario',[MedicosController::class,'altapacientes'])->name('pacientesusuario');
Route::post('/guardarpacientes',[MedicosController::class,'guardarpacientes'])->name('guardarpacientes');


/// Rutas restauracion de contraseña ///
Route::get('restaurar',[LoginController::class,'restaurar'])->name('restaurar');
Route::get('restaurarc',[LoginController::class,'restaurarc'])->name('restaurarc');

/// CRUD CONSULTAS ///
Route::get('altaconsulta',[ConsultasController::class,'altaconsulta'])->name('altaconsulta');
Route::get('reporteconsultas',[ConsultasController::class,'reporteconsultas'])->name('reporteconsultas');
Route::post('guardarconsulta',[ConsultasController::class,'guardarconsulta'])->name('guardarconsulta');
Route::get('modificarconsulta/{idconsulta}',[ConsultasController::class,'modificarconsulta'])->name('modificarconsulta');
Route::POST('guardacambios',[ConsultasController::class,'guardacambios'])->name('guardacambios');
route::get('desactivaconsulta/{idconsulta}',[ConsultasController::class,'desactivaconsulta'])->name('desactivaconsulta');
route::get('activarconsulta/{idconsulta}',[ConsultasController::class,'activarconsulta'])->name('activarconsulta');
route::get('borraconsulta/{idconsulta}',[ConsultasController::class,'borraconsulta'])->name('borraconsulta');
Route::get('verconsulta/{idconsulta}',[ConsultasController::class,'verconsulta'])->name('verconsulta');


Route::get('reporte_consulta',[ConsultasController::class,'reporte_consulta'])->name('reporte_consultas');
Route::get('buscarconsulta',[ConsultasController::class,'reporte_consulta'])->name('buscarconsulta');
/// Pdf ///
//PDF CONSULTAS
Route::name('pdfconsultas')->get('pdfconsultas',[ConsultasController::class,'getPdfConsultas']);
//EXCEL CONSULTAS
Route::name('export')->get('export',[ConsultasController::class,'export']);

// CRUDS MEDICOS //
Route::get('/alta_medicos',[MedicosController::class,'alta_medicos'])->name('alta_medicos');
Route::post('/guardar_medicos',[MedicosController::class,'guardar_medicos'])->name('guardar_medicos');
Route::get('/reportes_medicos',[MedicosController::class,'reportes_medicos'])->name('reportes_medicos');
Route::get('/modifica_medicos/{idmedico}',[MedicosController::class,'modifica_medicos'])->name('modifica_medicos');
Route::get('/activar_medicos/{idmedico}',[MedicosController::class,'activar_medicos'])->name('activar_medicos');
Route::get('/desactivar_medicos/{idmedico}',[MedicosController::class,'desactivar_medicos'])->name('desactivar_medicos');
Route::get('/eliminar_medicos/{idmedico}',[MedicosController::class,'eliminar_medicos'])->name('eliminar_medicos');
Route::get('/descarga_imagen/{img}',[MedicosController::class,'descarga_imagen'])->name('descarga_imagen');
Route::post('/cambio_medicos',[MedicosController::class,'cambio_medicos'])->name('cambio_medicos');

Route::get('consulta_medicos',[MedicosController::class,'consulta_medicos'])->name('consulta_medicos');
Route::get('buscar',[MedicosController::class,'consulta_medicos'])->name('buscar');

Route::get('consulta_pacientes',[PacientesController::class,'consulta_pacientes'])->name('consulta_pacientes');
Route::get('buscarpaciente',[PacientesController::class,'consulta_pacientes'])->name('buscarpaciente');
/// Excel consultas ///
Route::name('exportmedicos')->get('exportmedicos',[MedicosController::class,'exportmedicos']);
//PDF CONSULTAS //
Route::name('pdfmedicos')->get('pdfmedicos',[MedicosController::class,'getPdfMedicos']);

//// CRUD PACIENTES ////
Route::get('/altapacientes',[PacientesController::class,'altapacientes'])->name('altapacientes');
Route::post('/guardarpaciente',[PacientesController::class,'guardarpaciente'])->name('guardarpaciente');
Route::get('/reportepacientes',[PacientesController::class,'reportepacientes'])->name('reportepacientes');
Route::get('/desactivapaciente/{idpaciente}',[PacientesController::class,'desactivapaciente'])->name('desactivapaciente');
Route::get('/activapaciente/{idpaciente}',[PacientesController::class,'activapaciente'])->name('activapaciente');
Route::get('/borrarpaciente/{idpaciente}',[PacientesController::class,'borrarpaciente'])->name('borrarpaciente');
Route::get('/modificapacientes/{idpaciente}',[PacientesController::class,'modificapacientes'])->name('modificapacientes');
Route::post('/guardacambiospaciente',[PacientesController::class,'guardacambiospaciente'])->name('guardacambiospaciente');
//PDF CONSULTAS //
Route::name('pdfpacientes')->get('pdfpacientes',[PacientesController::class,'getPdfPacientes']);
Route::name('exportpacientes')->get('exportpacientes',[PacientesController::class,'exportpacientes']);

//// CRUD CUPONES /////
Route::get('/altacupon',[CuponesController::class,'altacupon'])->name('altacupon');
Route::post('guardarcupon',[CuponesController::class,'guardarcupon'])->name('guardarcupon');
Route::get('/reportecupon',[CuponesController::class,'reportecupon'])->name('reportecupon');
route::get('desactivarcupon/{idcupon}',[CuponesController::class,'desactivarcupon'])->name('desactivarcupon');
route::get('activarcupon/{idcupon}',[CuponesController::class,'activarcupon'])->name('activarcupon');
route::get('eliminarcupon/{idcupon}',[CuponesController::class,'eliminarcupon'])->name('eliminarcupon');
Route::get('/modificarcupon/{idcupon}',[CuponesController::class,'modificarcupon'])->name('modificarcupon');
Route::post('cambiocupon',[CuponesController::class,'cambiocupon'])->name('cambiocupon');
Route::name('pdfcupones')->get('pdfcupones',[CuponesController::class,'getPdfCupones']);
Route::name('exportcupones')->get('exportcupones',[CuponesController::class,'exportcupones']);

// CRUD CITAS
Route::get('/registrocitas',[CitasController::class,'registrocitas'])->name('registrocitas');
Route::post('/citaguardada',[CitasController::class,'citaguardada'])->name('citaguardada');
Route::get('/calendario',[CitasController::class,'calendario'])->name('calendario');


Route::get('event', [CitasController::class, 'index']);
Route::post('eventAjax', [CitasController::class, 'ajax']);

// RECETAS //
Route::get('/vistareceta',[RecetasController::class, 'vistareceta'])->name('vistareceta');
Route::post('/guardar_receta',[RecetasController::class,'guardar_receta'])->name('guardar_receta');
Route::get('/reporte_recetas',[RecetasController::class, 'reporte_recetas'])->name('reporte_recetas');
route::get('borrarreceta/{idreceta}',[RecetasController::class,'borrarreceta'])->name('borrarreceta');
Route::name('pdfrecetas')->get('pdfrecetas',[RecetasController::class,'getPdfRecetas']);
Route::name('exportrecetas')->get('exportrecetas',[RecetasController::class,'exportrecetas']);
Route::name('unicareceta')->get('unicareceta/{idreceta}',[RecetasController::class,'unicareceta']);