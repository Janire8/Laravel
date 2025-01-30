@extends('layouts.app')

@section('content')
<h1>Editar tarea</h1>
<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" value="{{ $task->title }}" required>
    <br>
    <label for="description">Descripción:</label>
    <textarea name="description" id="description" required>{{ $task->description }}</textarea>
    <br>
    <button type="submit">Actualizar</button>
</form>
@endsection
