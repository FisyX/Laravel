@extends('layout')


@section('content')


    @if(Session::has('EditMess'))
        <div class="alert alert-info">
            {{ Session::get('EditMess') }}
        </div>
    @endif


    @if(Session::has('DeleteMess'))
        <div class="alert alert-danger">
            {{ Session::get('DeleteMess') }}
        </div>
    @endif



    @if(Session::has('SuccessMess'))
        <div class="alert alert-success">
            {{ Session::get('SuccessMess') }}
        </div>
    @endif


    <div class="col-md-10">

        <h1 style="margin-top: -2px">Liste de mes films</h1>

    </div>


    <div class="col-md-2">


        <th><a  style="margin-bottom: 15px; margin-left: 40px" class="btn btn-hover btn-success" href="{{ route('movies_creer')  }}">Créer un film</a></th>

    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="w10 bg-dark">like</th>
            <th class="w100 bg-dark">Affiche</th>
            <th class="bg-dark">Film</th>
            <th class="w100 bg-dark">Type</th>
            <th class="w100 bg-dark">Annee</th>
            <th class="w50 bg-dark">Editer</th>
            <th class="w50 bg-dark">Supprimer</th>
        </tr>
        </thead>
                    <tbody>


                    @foreach($allMovies as $movie)



                        <tr>


                            <td>

                                {{ $movie->id }}

                                <a href="{{ route("movies_panier",[

                                'id' => $movie->id

                                ]) }}">

                                    @if(!array_key_exists($movie->id, session('id_movies', [])))

                                <div class="fa fa-heart-o">
                                </div>

                                     @else

                                    <div class="fa fa-heart"></div>
                                        @endif
                                </a>
                            </td>

                        <td>

                            <img style="width:100%" src="{{$movie->image}}">
                        </td>


                            <td>

                                <a class="movietitre" href="{{ route("movies_voir",

                  ["id" => $movie->id]


                  ) }}">{{$movie->title}}</a>

                            </td>


                        <td>

                            {{$movie->type}}

                        </td>



                        <td>

                            {{$movie->annee}}

                        </td>



                            <td>


                                <a class="movietitre btn btn-warning btn-gradient dark btn-block btn-sm" href="{{ route("movies_editer",

                  ["id" => $movie->id]


                  ) }}">Editer <span class="fa fa-edit"></span></a>
                            </td>

                        <td>

                            <a class="btn btn-danger btn-gradient dark btn-block btn-sm" href="{{ route('movies_delete',

                  ["id" => $movie->id])  }}">Supprimer <span class="fa fa-trash-o"></span></a>

                        </td>





                        @endforeach

                        </tr>



                    </tbody>
                </table>


    @endsection