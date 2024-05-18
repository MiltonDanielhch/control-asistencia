<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiembroController extends Controller
{
    public function index(){
        return view('layouts.miembros.index');
    }
}
