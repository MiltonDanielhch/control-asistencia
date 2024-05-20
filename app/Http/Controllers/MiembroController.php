<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class MiembroController extends Controller
{
    public function index(){
        $miembros = Miembro::all();
        return view('layouts.miembros.index', compact('miembros'));
    }
    public function create()
    {
        return view ('layouts.miembros.create');
    }
    public function store(Request $request){
        // $miembro = request()->all();
        // return response()->json($miembro);

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
        $miembro->fotografia = $request->file('fotografia')->store('fotografias_miembros', 'public');
        $miembro->fecha_ingreso = '2024-05-24';

        $miembro->save();

    }
}
