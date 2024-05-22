@extends('layouts.admin')

@section('content')
<div class="content" style="margin-left: 20px">
    <h1>Creación de un nuevo ministerios</h1><br>

    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        <li> {{ $error }}</li>
    </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3>
                        <div class="card-title">Lleno los Datos</div>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/ministerios') }}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Nombre del Ministerio</label><b>*</b>
                                            <input type="text" name="nombre_ministerio"
                                                value="{{ old('nombre_ministerio') }}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Fecha de Ingreso</label><b>*</b>
                                            <input type="date" name="fecha_ingreso" value="{{ old('fecha_ingreso') }}"
                                                class="form-control" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Descripción</label><b>*</b>
                                            <textarea class="form-control" name="descripcion" id="descripcion" cols="30"
                                                rows="40"></textarea>
                                            <script>
                                                ClassicEditor
                                                        .create( document.querySelector( '#descripcion' ) )
                                                        .then( editor => {
                                                                console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                                console.error( error );
                                                        } );
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <a href="" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Guardar Registro</button>
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
