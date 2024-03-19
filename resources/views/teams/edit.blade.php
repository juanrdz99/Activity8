<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1>Edit Team: {{ $team->name }}</h1>
    <form action="{{ route('teams.update', $team->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $team->name }}" required>
        <!-- Agrega más campos según sea necesario -->
        <button type="submit">Update</button>
    </form>
@endsection

</body>
</html>