<?php

namespace App\Http\Controllers;

use App\Http\Request;
use App\Card;

class CardsController extends Controller
{
    public function index(){

        $cards = \DB::table('cards')->get();
        return view('cards/index' , compact('cards'));
    }



    public function show($id){

        $card = Card::findOrFail($id);
        return view('cards/show' , compact('card'));

    }

    // route model binding
    // public function show2(Card $card){

    //     $card->load('notes.user');
    //     return view('cards/show' , compact('card'));

    // }
}
