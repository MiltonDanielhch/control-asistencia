<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use Illuminate\Http\Request;

class MiembroController extends Controller
{
    public function index(){
        $miembros = Miembro::all();
        return view('layouts.miembros.index', compact('miembros'));
    }
}
