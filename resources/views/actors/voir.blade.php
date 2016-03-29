@extends('layout')


@section('content')
        <a href="{{ route('actors_lister')  }}">Retour</a>
        <div class="title">{{$actors->firstname}} {{$actors->lastname}}</div>

        <div class="descritpion">
            {{!! $actors->biography !!}}</div>

        <img class="image" src="{{$actors->image}}"
@endsection