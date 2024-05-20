@extends('layouts.admin')

@section('content')
<div class="content" style="margin-left: 10px">
    <h1>Listado de miembro</h1>


    @if ($message = Session::get('mensaje'))
        <script>
            Swal.fire({
                title: "Buen trabajo",
                text: "{{ $message }}",
                icon: "success"
            });
        </script>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Miembros Registrados</b></h3>
                    <div class="card-tools">
                        <a href="{{ url('/miembros/create') }}" class="btn btn-primary">
                            <i class="bi bi-file-plus"></i>Agregar nuevo miembro
                        </a>
                    </div>
                </div>



                <div class="card-body" style="display: block;">

                    <table id="example1" class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre y Apellido</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Estado</th>
                                <th>Agregado</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $contador = 0;
                            @endphp

                            @foreach ($miembros as $miembro)
                            <tr>
                                <td>
                                    @php
                                    echo $contador = $contador + 1;
                                    @endphp
                                </td>
                                <td>{{ $miembro->nombre_apellido }}</td>
                                <td>{{ $miembro->telefono }}</td>
                                <td>{{ $miembro->email }}</td>
                                <td>{{ $miembro->estado }}</td>
                                <td>{{ $miembro->fecha_ingreso }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <script>
                        $(function () {
                            $("#example1").DataTable({
                                    "pageLength": 10,
                                    "language": {
                                        "emptyTable": "No hay información",
                                        "info": "Mostrando START a END de TOTAL Miembros",
                                        "infoEmpty": "Mostrando 0 a 0 de 0 Miembros",
                                        "infoFiltered": "(Filtrado de MAX total Miembros)",
                                        "infoPostFix": "",
                                        "thousands": ",",
                                        "lengthMenu": "Mostrar_MENU_Miembros",
                                        "loadingRecords": "Cargando...",
                                        "processing": "Procesando...",
                                        "search": "Buscador:",
                                        "zeroRecords": "Sin resultados encontrados",
                                        "paginate": {
                                            "first": "Primero",
                                            "last": "Ultimo",
                                            "next": "Siguiente",
                                            "previous": "Anterior"
                                        }
                                    },
                                    "responsive": true, "lengthChange": true, "autoWidth": false,
                                    buttons: [{
                                        extend: 'collection',
                                        text: 'Reportes',
                                        orientation: 'landscape',
                                        buttons: [{
                                            text: 'Copiar',
                                            extend: 'copy',
                                        }, {
                                            extend: 'pdf'
                                        },{
                                            extend: 'csv'
                                        },{
                                            extend: 'excel'
                                        },{
                                            text: 'Imprimir',
                                            extend: 'print'
                                        }
                                        ]
                                    },
                                        {
                                            extend: 'colvis',
                                            text: 'Visor de columnas',
                                            collectionLayout: 'fixed three-column'
                                        }
                                    ],
                                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                            });
                    </script>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
