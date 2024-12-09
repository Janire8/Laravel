<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Models\Note;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/note',[NoteController::class, 'index']);

Route::get('/formulario',[NoteController::class, 'formulario']);