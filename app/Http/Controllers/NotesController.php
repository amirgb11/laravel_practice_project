<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Note;
use App\Card;
use Gate;

class NotesController extends Controller
{
    public function store(Card $card , Request $req)
    {
        // return $req->all();
        // return request()->all();

        $this->validate($req , [
            'body' => 'required|min:6'
        ]);
        $note = new Note($req->all());
        $note->user_id = 1;
        $card->notes()->save($note);


        // $note->body = request()->body;
        // $card->notes()->save($note);

        // return redirect('URL');
        return back();
        
    }


    public function edit(Note $note)
    {
        //\Auth::loginUsingId(1);
        // auth()->logout();

        // if(Gate::denies('update' , $note)){
        //     abort(404 , 'Sorry');
        // }

        //$this->authorize('update' , $note);
        return view('notes.edit' , compact('note'));
    }

    public function update(Note $note)
    {
        $note->update(request()->all());
        return back();
    }
}
