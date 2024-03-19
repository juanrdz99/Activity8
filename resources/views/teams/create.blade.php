<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1>Create New Team</h1>
    <form action="{{ route('teams.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <!-- Agrega más campos según sea necesario -->
        <button type="submit">Create</button>
    </form>
@endsection

</body>
</html>