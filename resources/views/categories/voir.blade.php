@extends('layout')


@section('content')
        <a href="{{ route('categories_lister')  }}">Retour</a>
        <div class="title">{{$categories->title}}</div>

        <div class="descritpion">
            {{!! $categories->description !!}}</div>

        <img class="image" src="{{$categories->image}}"

@endsection