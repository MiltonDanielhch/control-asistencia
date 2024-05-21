@extends('layouts.admin')

@section('content')
<div class="content" style="margin-left: 20px">
    <h1>Datos del miembro Registrado</h1><br>

    <div class="row">
        <div class="col-md-11">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3>
                        <div class="card-title">Datos Registrados</div>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Nombres y Apellidos</label>
                                        <input type="text" name="nombre_apellido"
                                            value="{{ $miembro->nombre_apellido }}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" value="{{ $miembro->email }}"
                                            class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Telefono</label>
                                        <input type="number" name="telefono" value="{{ $miembro->telefono }}"
                                            class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Fecha de Nacimiento</label>
                                        <input type="date" name="fecha_nacimiento"
                                            value="{{ $miembro->fecha_nacimiento }}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Género</label>

                                        <select name="genero" id="" class="form-control" disabled>
                                            @if ($miembro->genero == 'MASCULINO')
                                            <option value="MASCULINO">MASCULINO</option>
                                            <option value="FEMENINO">FEMENINO</option>
                                            @else
                                            <option value="FEMENINO">FEMENINO</option>
                                            <option value="MASCULINO">MASCULINO</option>
                                            @endif

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Ministerio</label>
                                        <input type="text" name="ministerio" value="{{ $miembro->ministerio }}"
                                            class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Dirección</label>
                                        <input type="text" name="direccion" value="{{ $miembro->direccion }}"
                                            class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fotografia</label>
                                @if($miembro->fotografia == '')
                                    @if($miembro->genero == 'MASCULINO')
                                        <img src="{{url('images/avatar-hombre.jpg')}}" width="150px" alt="">
                                    @else
                                        <img src="{{url('images/avatar-mujer.jpg')}}" width="150px" alt="">
                                @endif
                                @else
                                <center>
                                    <img src="{{url('storage').'/'.$miembro->fotografia}}" width="150px" alt="a">
                                </center>
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
