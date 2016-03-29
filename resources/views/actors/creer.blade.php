@extends('layout')


@section('content')



        <div class="panel-heading">Creer un nouvel acteur</div>


        <form class="w400" enctype="multipart/form-data" method="post" action="{{ route('actors_enregistrer') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />


            <label for="img">Image</label>
            <input type="file" capture="capture" accept="image/*" id="img" name="img"/>


            <label for="title">Prénom:</label>
            <input required name="firstname" id="firstname" class="form-control" />

            <label for=""description>Nom:</label>
            <input name="description" id="description" class="form-control" /></textarea>


            <label for="annee">annee:</label>
            <input name="title" id="title" />

            <INPUT type="checkbox" name="nom" value="bouton"> Vo
            <INPUT type="checkbox" name="nom" value="bouton"> Fr
            <INPUT type="checkbox" name="nom" value="bouton"> Visibilité

            <button type="submit" class="btn active btn-success btn-block w150">Créer un nouvel acteur</button>


        </form>

@endsection