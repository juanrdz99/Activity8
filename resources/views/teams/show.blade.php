<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1>Team Details</h1>
    <p>Name: {{ $team->name }}</p>
    <!-- Mostrar otros detalles del equipo aquí -->
    <a href="{{ route('teams.edit', $team->id) }}">Edit</a>
    <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection

</body>
</html>