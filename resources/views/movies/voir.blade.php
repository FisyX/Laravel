

@extends('layout')


@section('content')
        <a href="{{ route('movies_lister')  }}">Retour</a>
        <div class="title">{{$movie->title}}</div>

        <div class="descritpion">
            {{!! $movie->description !!}}</div>

        <img class="image" src="{{$movie->image}}"
@endsection