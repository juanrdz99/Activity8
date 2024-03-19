<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
</head>
<body>
    <h1>Teams</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>City ID</th>
                <th>Titles</th>
                <th>Logo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->city_id }}</td>
                <td>{{ $team->titles }}</td>
                <td>{{ $team->logo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
