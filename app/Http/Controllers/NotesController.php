<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function store(Card $card)
    {
        // return $req->all();
        // return request()->all();

        $note = new Note;
        $note->body = request()->body;
        $card->notes()->save($note);

        // return redirect('URL');
        return back();
        
    }


    public function edit(Note $note)
    {
        return view('notes.edit' , compact('note'));
    }

    public function update(Note $note)
    {
        $note->update(request()->all());
        return back();
    }
}