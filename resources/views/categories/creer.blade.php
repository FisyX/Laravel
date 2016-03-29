@extends('layout')


@section('content')
        <div class="title">Creer une nouvelle catégorie</div>

        <form class="table" method="post" action="{{ route('movies_enregistrer') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <label for="title">Titre:</label>
            <input name="title" id="title" />

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

            <button type="submit">Créer une catégorie</button>

        </form>

@endsection