@extends('layouts.admin')

@section('content')
<div class="content" style="margin-left: 20px">
    <h1>Actualizar datos del miembro</h1><br>

    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        <li> {{ $error }}</li>
    </div>
    @endforeach

    <div class="row">
        <div class="col-md-11">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3>
                        <div class="card-title">Lleno los Datos</div>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/miembros', $miembro->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nombres y Apellidos</label><b>*</b>
                                            <input type="text" name="nombre_apellido"
                                                value="{{ $miembro->nombre_apellido }}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Email</label><b>*</b>
                                            <input type="email" name="email" value="{{ $miembro->email }}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Telefono</label><b>*</b>
                                            <input type="number" name="telefono" value="{{ $miembro->telefono }}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Fecha de Nacimiento</label><b>*</b>
                                            <input type="date" name="fecha_nacimiento"
                                                value="{{ $miembro->fecha_nacimiento }}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Género</label>
                                            <select name="genero" id="" class="form-control" required>
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
                                            <label for="">Ministerio</label><b>*</b>
                                            <input type="text" name="ministerio" value="{{ $miembro->ministerio }}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Dirección</label><b>*</b>
                                            <input type="text" name="direccion" value="{{ $miembro->direccion }}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Fotografia</label>
                                    <input type="file" name="fotografia" id="file" class="form-control"><br>
                                    <center>
                                        <output id="list">
                                            @if($miembro->fotografia == '')
                                                @if($miembro->genero == 'MASCULINO')
                                                    <img src="{{url('images/avatar-hombre.jpg')}}" width="150px" alt="">
                                                @else
                                                    <img src="{{url('images/avatar-mujer.jpg')}}" width="150px" alt="">
                                            @endif
                                            @else
                                            <center>
                                                <img src="{{url('storage').'/'.$miembro->fotografia}}" width="150px"
                                                    alt="">
                                            </center>
                                            @endif
                                        </output>
                                    </center>
                                    <script>
                                        function archivo(evt){
                                            var files = evt.target.files;
                                            //obtenemos la imagen del campo "file".
                                            for (var i=0, f; f = files[i]; i++){
                                                //solo admitimos imagenes.
                                                if (!f.type.match('image.*')){
                                                    continue;
                                                }
                                                var reader = new FileReader();
                                                reader.onload = (function (theFile){
                                                    return function (e){
                                                        //insertamos la imagen
                                                        document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result,'"width="50%" title="', escape(theFile.name),'"/>'].join('');
                                                    };
                                                }) (f);
                                                reader.readAsDataURL(f);
                                            }
                                        }
                                        document.getElementById('file').addEventListener('change',archivo, false);
                                    </script>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <a href="" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Actualizar Registro</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
