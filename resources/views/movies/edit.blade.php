@extends('layout')


@section('content')



        @if(count($errors->all()))

                <div class="alert alert-danger">

                        <ul>

                                @foreach($errors->all()as $error)

                                        <li>{{$error}}</li>

                                @endforeach

                        </ul>

                </div>

        @endif



        <div class="panel-heading">Editer un nouveau film</div>

        <form style="margin-left: 10px" class="w400" method="post"     enctype="multipart/form-data" action="{{ route("movies_modifier",["id" => $movie->id]) }}">



                <input type="hidden" name="_token" value="{{ csrf_token() }}" />


                <label for="img">Image</label>
                <input type="file" capture="capture" accept="image/*" id="img" name="img"/>


                <img src="{{ $movie->image }}" alt="no image" width="110px"/>


                <label for="title">Titre:</label>
                <input id="title" class="form-control" name="title" value="{{ $movie->title }}"/>



                <label for="description">description:</label>
                <textarea name="description"  class="form-control" id="description" rows="3" /> </textarea>

                <label for="synopsis">Synopsis:</label>
                <textarea name="synopsis" class="form-control textarea-grow" id="synopsis" rows="4" /></textarea>

                <label for="budget">Budget:</label>
                <input name="budget" id="budget" class="form-control" value="{{ $movie->budget }}"/>

                <label for="annee">Annee:</label>
                <input name="annee" id="annee" class="form-control" value="{{ $movie->annee }}"/>




                <label for="image">Affiche:</label>
                <input id="image" class="form-control" name="image" value="{{ $movie->image }}"/>



                <div class="checkbox-custom checkbox-primary mb5">
                        <input checked="" id="checkboxExample4" type="checkbox">
                        <label for="checkboxExample4">Vo</label>
                </div>


                <div class="checkbox-custom checkbox-primary mb5">
                        <input checked="" id="checkboxExample4" type="checkbox">
                        <label for="checkboxExample4">Fr</label>
                </div>



                <div class="switch switch-info switch-inline">
                        <input id="exampleCheckboxSwitch1" checked="" type="checkbox">
                        <label for="exampleCheckboxSwitch1">Visibilité</label>
                </div>


                <button type="submit" class="btn active btn-success btn-block w100">Editer un film</button>




        </form>
        <a class="btn active btn-info btn-block w100" href="{{ route("movies_lister") }}">Retour</a>

@endsection