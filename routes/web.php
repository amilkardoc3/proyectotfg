<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Models\Persona;
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
// www.pedidozlla.com/

Route::get('/', function () {
    // $personas = Persona::all();
    // dd($personas);
    dd("Hola");
    // return view('welcome');

});
// www.pedidozlla.com/personas/edit
// Route::get('/personas/edit', function () {
//     $personas = Persona::all();
//     dd($personas);
//     // return view('welcome');
// });
// Resources: Permite trabajar con los metodos principales de gestion de datos
// index, create, store, edit, update, destroy, show
// Route::resource('personas', PersonaController::class);
// Route::get('personas/exportarpdf', [PersonaController::class, 'exportar_pdf'])->name('personas.exportar_pdf');
Route::get('personas/index', [PersonaController::class, 'index'])->name('personas.index');
Route::get('personas/create', [PersonaController::class, 'create'])->name('personas.create');
Route::post('personas/store', [PersonaController::class, 'store'])->name('personas.store');
Route::get('personas/{id}/edit', [PersonaController::class, 'edit'])->name('personas.edit');
Route::put('personas/update', [PersonaController::class, 'update'])->name('personas.update');
Route::get('personas/{id}/show', [PersonaController::class, 'show'])->name('personas.show');
Route::get('personas/{id}/destroy', [PersonaController::class, 'destroy'])->name('personas.destroy');

Route::get('personas/graficos', [PersonaController::class, 'graficos'])->name('personas.graficos');

