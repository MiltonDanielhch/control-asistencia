<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MiembroController extends Controller
{
    public function index(){
        $miembros = Miembro::all()->sortByDesc('id');
        return view('layouts.miembros.index', compact('miembros'));
    }
    public function create()
    {
        return view ('layouts.miembros.create');
    }
    public function store(Request $request){
        // $miembro = request()->all();
        // return response()->json($miembro);

        $request->validate([
            'nombre_apellido' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required',
            'email' => 'required',
            'ministerio' => 'required',
        ]);

        $miembro = new Miembro();

        $miembro->nombre_apellido = $request->nombre_apellido;
        $miembro->direccion = $request->direccion;
        $miembro->telefono = $request->telefono;
        $miembro->fecha_nacimiento = $request->fecha_nacimiento;
        $miembro->genero = $request->genero;
        $miembro->email = $request->email;
        $miembro->estado = '1';
        $miembro->ministerio = $request->ministerio;
        //$miembro->fotografia = $request->fotografia;
        if($request->hasFile('fotografia')){
            $miembro->fotografia = $request->file('fotografia')->store('fotografias_miembros', 'public');
        }
        $miembro->fecha_ingreso = '2024-05-24';

        $miembro->save();

        return redirect()->route('miembros.index')->with('mensaje', 'se registro al miembro de la manera correcta');
    }
    public function show($id){
        $miembro = Miembro::findOrFail($id);

        // return response()->json($miembro);
        return view ('layouts.miembros.show', compact('miembro'));
    }
    public function edit($id){
        $miembro = Miembro::findOrFail($id);

        // return response()->json ($miembro);
        return view('layouts.miembros.edit', compact('miembro'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'nombre_apellido' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required',
            'email' => 'required',
            'ministerio' => 'required',
        ]);

        $miembro = Miembro::find($id);

        $miembro->nombre_apellido = $request->nombre_apellido;
        $miembro->direccion = $request->direccion;
        $miembro->telefono = $request->telefono;
        $miembro->fecha_nacimiento = $request->fecha_nacimiento;
        $miembro->genero = $request->genero;
        $miembro->email = $request->email;
        $miembro->ministerio = $request->ministerio;

        if($request->hasFile('fotografia')){
            storage::delete('public/'.$miembro->fotografia);
            $miembro->fotografia = $request->file('fotografia')->store('fotografias_miembros', 'public');
        }

        $miembro->save();

        return redirect()->route('miembros.index')->with('mensaje', 'se actualizo al miembro de la manera correcta');
    }
}
