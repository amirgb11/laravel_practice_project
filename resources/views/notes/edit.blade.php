@extends('layout')

@section('content')

    <a class="btn btn-sm btn-danger" href="/cards/{{ $note->card_id }}">Back</a>
    <h3> Edit Note</h3>
        <hr>
        <form action="/notes/{{ $note->id }}" method="POST">
            {{ method_field('PATCH')}}
            {{ csrf_field() }}
            <div class="form-group">
                <textarea name="body" title="body" class="form-control"> {{ $note->body }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Update Note</button>
            </div>
        </form>

@stop