<?php

namespace App\Http\Controllers;

use App\Http\Request;

class CardsController extends Controller
{
    public function index(){
        return view('cards/index');
    }
}
