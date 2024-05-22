<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use Illuminate\Http\Request;
use App\Models\Ministerio;
class AdminController extends Controller
{
    public function index(){
        $miembros = Miembro::all();
        $ministerios = Ministerio::all();
        return view('index', compact('ministerios', 'miembros'));
    }
}
