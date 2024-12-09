<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(){
        // return "hola";
        $notes = Note::all();
        return view ('note.index', compact('notes'));
    }

    public function form(){
        return view ('note.form');
    }

    public function store(Request $request){
       Note::create($request->all());
       return redirect()->route('note.index');
    }
    public function edit(Note $note):View{
        return view('note.edit', compact('note'));
    }

    //REQUEST
}
