@extends('layouts.admin')

@section('content')
    <div class="content">
        <h1>Listado de miembro</h1>
        @foreach ($miembros as $miembro)
            <h1>{{ $miembro->nombre_apellido }}</h1>
            <h2>{{ $miembro->email }}</h2>
        @endforeach
    </div>
@endsection
