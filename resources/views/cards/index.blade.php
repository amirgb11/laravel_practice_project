@extends('layout')

@section('content')

    <h1> Cards Page</h1>
    @foreach($cards as $card) 
        <div>
            <a href="/cards/{{ $card->id }}"> {{ $card->title }} </a>
        </div>
    @endforeach
@stop