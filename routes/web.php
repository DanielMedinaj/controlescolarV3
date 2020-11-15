<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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


/*Route::get('/', function (){
    return "Esta es la pagina principal";
});

Route::get('cursos', function (){
    return "Esta es la segunda pagina";
});
Route::get('cursos/create', function (){
    return "Esta pagina es para crear cursos";
});*/

Route::get("/", HomeController::class);
Route::get("login", [LoginController::class,'index']);
Route::get("paginainicial", [LoginController::class,'create']);
Route::get("alumnos", [LoginController::class,'alumno']);
Route::get("listaralumnos", [LoginController::class,'showalumnos']);
Route::post("alumnos", [LoginController::class,'crearalumno']);
Route::get("index", [LoginController::class,'logout']);
Route::post("login", [LoginController::class,'authenticate']);
//Route::get('cursos/mostrar', [LoginController::class, 'show']);