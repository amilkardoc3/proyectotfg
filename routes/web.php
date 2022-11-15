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
Route::get('persona', [PersonaController::class, 'index'])->name('persona.index');
Route::get('persona/create', [PersonaController::class, 'create'])->name('persona.create');
Route::post('persona/store', [PersonaController::class, 'store'])->name('persona.store');
Route::get('persona/{id}/edit', [PersonaController::class, 'edit'])->name('persona.edit');
Route::put('persona/update', [PersonaController::class, 'update'])->name('persona.update');
Route::get('persona/{id}/show', [PersonaController::class, 'show'])->name('persona.show');
Route::get('persona/{id}/destroy', [PersonaController::class, 'destroy'])->name('persona.destroy');

Route::get('persona/graficos', [PersonaController::class, 'graficos'])->name('persona.graficos');

