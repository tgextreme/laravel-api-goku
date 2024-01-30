{{-- resources/views/characters.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <table width="100%">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ki</th>
            <th>Max Ki</th>
            <th>Raza</th>
            <th>Género</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Afiliación</th>
            <th>Planeta de Origen</th>
            <!-- Otros encabezados de tabla -->
        </tr>
        @foreach ($characters as $character)
            <tr>
                <td><a href="{{ url('/character/' . $character['id']) }}">{{ $character['id'] }}</a></td>
                <td>{{ $character['name'] }}</td>
                <td>{{ $character['ki'] ?? 'N/A' }}</td>
                <td>{{ $character['maxKi'] ?? 'N/A' }}</td>
                <td>{{ $character['race'] ?? 'N/A' }}</td>
                <td>{{ $character['gender'] ?? 'N/A' }}</td>
                <td>{{ $character['description'] ?? 'N/A' }}</td>
                <td><img src="{{ $character['image'] }}" alt="{{ $character['name'] }}" style="width: 100px; height: auto;"></td>
                <td>{{ $character['affiliation'] ?? 'N/A' }}</td>
                <td>{{ $character['originPlanet']['name'] ?? 'N/A' }}</td>
                <!-- Otros campos de la tabla -->
            </tr>
        @endforeach
    </table>
</body>
</html>
