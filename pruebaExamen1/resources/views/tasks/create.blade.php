@extends('layouts.app')

@section('content')
<h1>Crear nueva tarea</h1>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="description">Descripción:</label>
    <textarea name="description" id="description" required></textarea>
    <br>
    <button type="submit">Guardar</button>
</form>
@endsection
