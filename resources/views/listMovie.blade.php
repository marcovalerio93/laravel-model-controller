@extends('layout.app')

@section('title', 'Movies')

@section('content')

    <h1>lista dei film</h1>

    <ul>
    
        @foreach ($movies as $movie)
            <li>
                {{$movie->id}} - {{$movie->title}}
            </li>
        @endforeach

    </ul>
@endsection