@extends('layout')


@section('content')
        <a href="{{ route('directors_lister')  }}">Retour</a>
        <div class="title">{{$directors->firstname}} {{$directors->lastname}}</div>

        <div class="descritpion">
            {{!! $directors->biography !!}}</div>

        <img class="image" src="{{$directors->image}}"
@endsection