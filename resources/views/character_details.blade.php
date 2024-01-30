{{-- resources/views/character_details.blade.php --}}
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalles del Personaje</title>
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

<h2>Información del Personaje</h2>


<h2>Información del Personaje</h2>
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
    </tr>
    <tr>
        <td>{{ $character['id'] }}</td>
        <td>{{ $character['name'] }}</td>
        <td>{{ $character['ki'] }}</td>
        <td>{{ $character['maxKi'] }}</td>
        <td>{{ $character['race'] }}</td>
        <td>{{ $character['gender'] }}</td>
        <td>{{ $character['description'] }}</td>
        <td><img src="{{ $character['image'] }}" alt="Imagen de {{ $character['name'] }}" style="width: 100px; height: auto;"></td>
        <td>{{ $character['affiliation'] }}</td>
        <td>{{ $character['originPlanet']['name'] ?? 'N/A' }}</td>
    </tr>
</table>

<h2>Transformaciones</h2>
<table width="100%">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Imagen</th>
        <th>Ki</th>
    </tr>
    @foreach ($character['transformations'] as $transformation)
    <tr>
        <td>{{ $transformation['id'] }}</td>
        <td>{{ $transformation['name'] }}</td>
        <td><img src="{{ $transformation['image'] }}" alt="Imagen de {{ $transformation['name'] }}"></td>
        <td>{{ $transformation['ki'] }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
