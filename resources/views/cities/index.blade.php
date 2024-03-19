<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities</title>
</head>
<body>
    <h1>Cities</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <!-- Agrega más columnas según sea necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach($cities as $city)
                <tr>
                    <td>{{ $city->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
