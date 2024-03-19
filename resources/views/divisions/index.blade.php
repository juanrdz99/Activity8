<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division List</title>
</head>
<body>
    <h1>Division List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>superbowl_titles</th>
            </tr>
        </thead>
        <tbody>
            @foreach($divisions as $division)
            <tr>
                <td>{{ $division->name }}</td>
                <td style="text-align: center;">{{ $division->superbowl_titles }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
