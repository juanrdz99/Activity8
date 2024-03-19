<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference List</title>
</head>
<body>
    <h1>Conference List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>superbowl_titles</th>
            </tr>
        </thead>
        <tbody>
            @foreach($conferences as $conferences)
            <tr>
                <td>{{ $conferences->id }}</td>
                <td>{{ $conferences->name }}</td>
                <td style="text-align: center;">{{ $conferences->superbowl_titles }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
