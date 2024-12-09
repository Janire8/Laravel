<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Models\Note;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/note',[NoteController::class, 'index'])->name('note.index');
Route::get('/note/form',[NoteController::class, 'form'])->name('note.form');
Route::post('/note/store',[NoteController::class, 'store'])->name('note.store');
Route::get('/note/edit/{edit}',[NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/update/{edit}',[NoteController::class, 'update'])->name('note.update');
