<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'web'] , function(){

    Route::get('/', 'PagesController@home');    
    Route::get('/cards', 'CardsController@index');
    Route::get('/cards/{card}', 'CardsController@show');

    Route::post('/cards/{card}/notes', 'NotesController@store');

    Route::get('/note/{note}/edit', 'NotesController@edit');
    Route::patch('/notes/{note}', 'NotesController@update');


    Route::get('/about' , function(){
        return view('about');
    });

    Route::get('/' , function(){
        return view('welcome');
    });

    Route::get('/login' , function (){
        return view('login');
    });

});