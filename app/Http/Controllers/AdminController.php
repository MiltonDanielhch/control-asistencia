<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use Illuminate\Http\Request;
use App\Models\Ministerio;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        $miembros = Miembro::all();
        $ministerios = Ministerio::all();
        $usuarios = User::all();
        return view('index', compact('ministerios', 'miembros', 'usuarios'));
    }
}
