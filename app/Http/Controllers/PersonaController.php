<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    
    public function index()
    {
        //pagian de inicio.
        $datos =Persona::all();
        return view('inicio', compact('datos'));
    }

    public function create()
    {
        //vista del formuliario donde agregamos datos- 
        return view('agregar');
    }

    public function store(Request $request)
    {
        //guardar datos en la base de datos 
        $personas= new Persona();
        $personas ->primer_apellido =$request->post('primer_apellido');
        $personas ->segundo_apellido =$request->post('segundo_apellido');
        $personas ->nombre =$request->post('nombre');
        $personas ->fecha_nacimiento =$request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("persona.index")->with("success", "Agregado con exito");






    }

    public function show(Persona $persona)
    {
        //para obtener un registor de la tabla
        return view('eliminar');
    }

    public function edit(Persona $persona)
    {
        //obtener datos y mostralos en una vista
        return view('actualizar');

    }

    
    public function update(Request $request, Persona $persona)
    {
        //actualiza los datos en la bd
    }

    public function destroy(Persona $persona)
    {
        //elimina un registro 
    }
}
