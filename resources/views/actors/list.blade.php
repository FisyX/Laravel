@extends('layout')


@section('content')





    <div class="col-md-10">

        <h1 style="margin-top: -2px">Liste des acteurs</h1>

    </div>


    <div class="col-md-2">


        <th><a  style="margin-bottom: 15px; margin-left: 15px" class="btn btn-hover btn-success" href="{{ route('actors_creer')  }}">Créer un acteur</a></th>

    </div>





    <table class="table table-striped">
        <thead>
        <tr>
            <th class="w10 bg-dark">like</th>
            <th class="w100 bg-dark">Image</th>
            <th class="bg-dark">Nom</th>
            <th class="w100 bg-dark">Ville</th>
            <th class="w100 bg-dark">Nationalité</th>
            <th class="w50 bg-dark">Editer</th>
            <th class="w50 bg-dark">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allActors as $actors)

            <tr>


                <td>

                    {{ $actors->id }}

                    <a href="{{ route("actors_panier",[

                                'id' => $actors->id

                                ]) }}">

                        @if(!array_key_exists($actors->id, session('id_actors', [])))

                            <div class="fa fa-star-o">
                            </div>

                        @else

                            <div class="fa fa-star"></div>
                        @endif
                    </a>
                </td>

                <td>

                    <img style="width:100%" src="{{$actors->image}}">
                </td>


                <td>

                    <a class="movietitre" href="{{ route("actors_voir",

                  ["id" => $actors->id]


                  ) }}">{{$actors->firstname}} {{$actors->lastname}}</a>

                </td>


                <td>

                    {{$actors->city}}

                </td>



                <td>

                    {{$actors->nationality}}

                </td>



                <td>
                    <a href="{{ route('actors_editer',                  ["id" => $actors->id])  }}"></a>

                    <a class="movietitre btn btn-warning btn-gradient dark btn-block btn-sm" href="{{ route("actors_editer",

                  ["id" => $actors->id]


                  ) }}">Editer <span class="fa fa-edit"></span></a>
                </td>



                <td>

                    <a class="btn btn-danger btn-gradient dark btn-block btn-sm" href="{{ route('actors_delete',

                  ["id" => $actors->id])  }}">Supprimer <span class="fa fa-trash-o"></span></a>

                </td>


                @endforeach

            </tr>



        </tbody>
    </table>


@endsection