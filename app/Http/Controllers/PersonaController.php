<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index(){
        // $personas = Persona::all();
        // $personas = Persona::where('estado', 1)->where('apellido', 'like', 'd%')->get();
        $personas = Persona::where('estado',1)->paginate(10);
        dd($personas);
        //return view('admin/persona/index')->with('personas', $personas);
    }

    public function create(){
        dd("mostrar la vista de creación");
        // $this->store();
        // return view('admin/persona/create');
    }

    public function store(Request $request){
        $persona = new Persona();
        $persona->nombre = "Cristian";
        $persona->apellido = "Antezana Novillo";
        $persona->save();
        
        return redirect()->route('persona.index');
    }

    public function edit($id){
        $persona = Persona::find($id);
        // return view('admin/persona/edit')->with('persona', $persona);
        dd($persona);
    }

    public function update(Request $request, $id){
        $persona = find($id);
        // $persona->nombre = $request->nombre;
        // $persona->apellido = $request->apellido;
        // $persona->save();
        // return redirect()->route('persona.index');
    }

    public function show($id){
        $persona = Persona::find($id);
        // return view('admin/persona/show')->with('persona', $persona);
        dd($persona);
    }

    public function destroy($id){
        $persona = Persona::find($id);
        $persona->estado = 0;
        $persona->save();
        return redirect()->route('persona.index');
    }
    
    public function exportar_pdf(){
        dd("Exportar PDF");
    }
}
