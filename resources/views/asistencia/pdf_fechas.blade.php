<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de asistencias</title>
</head>
<body>
    <br>
    <h1>Reporte de asistencias</h1>

    <table id="example1" class="table table-bordered table-striped table-sm" border="1">
        <thead class="thead">
            <tr>
                <th>No</th>

                <th>Fecha</th>
                <th>Nombres y Apellidos del Miembro</th>

            </tr>
        </thead>
        <tbody>
            @php
                $contador_asistencia = 1;
            @endphp
            @foreach ($asistencias as $asistencia)
                <tr>
                    <td>{{ $contador_asistencia++ }}</td>

                    <td>{{ $asistencia->fecha }}</td>
                    <td>{{ $asistencia->miembro->nombre_apellido }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
