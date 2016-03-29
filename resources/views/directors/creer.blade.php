@extends('layout')


@section('content')
        <div class="title">Creer un nouveau réalisateur</div>

        <form class="table" method="post" action="{{ route('directors_enregistrer') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <label for="title">Titre:</label>
            <input required name="title" id="title" />

            <label for=""description>description:</label>
            <textarea name="description" id="description" /></textarea>

            <label for="synopsis">Synopsis:</label>
            <textarea name="title" id="title" /></textarea>

            <label for="budget">budget:</label>
            <input name="title" id="title" />

            <label for="annee">annee:</label>
            <input name="title" id="title" />

            <INPUT type="checkbox" name="nom" value="bouton"> Vo
            <INPUT type="checkbox" name="nom" value="bouton"> Fr
            <INPUT type="checkbox" name="nom" value="bouton"> Visibilité

            <button type="submit">Créer un réalisateur</button>

        </form>

@endsection