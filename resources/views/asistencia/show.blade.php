@extends('layouts.admin')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Detalle de la') }} Asistencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('asistencias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $asistencia->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombres y apellidos del Miembro:</strong>
                                    {{ $asistencia->miembro->nombre_apellido }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
