


@extends('layout')


@section('content')





    <div class="col-md-10">

    <h1 style="margin-top: -2px">Liste de mes directeurs</h1>

    </div>


    <div class="col-md-2">


    <th><a  style="margin-bottom: 15px" class="btn btn-hover btn-success" href="{{ route('directors_creer')  }}">Créer un directeur</a></th>

    </div>




    <table class="table table-striped">
        <thead>
        <tr>
            <th class="w10 bg-dark">like</th>
            <th class="w100 bg-dark">Image</th>
            <th class="bg-dark">Prénom</th>
            <th class="w100 bg-dark"></th>
            <th class="w100 bg-dark"></th>
            <th class="w50 bg-dark">Editer</th>
            <th class="w50 bg-dark">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allDirectors as $director)

            <tr>


                <td>

                    {{ $director->id }}

                    <a href="{{ route("directors_panier",[

                                'id' => $director->id

                                ]) }}">

                        @if(!array_key_exists($director->id, session('id_directors', [])))

                            <div class="fa fa-heart-o">
                            </div>

                        @else

                            <div class="fa fa-heart"></div>
    row                    @endif
                    </a>
                </td>

                <td>

                    <img style="width:100%" src="{{$director->image}}">
                </td>


                <td>

                    <a class="movietitre" href="{{ route("directors_voir",

                  ["id" => $director->firstname]


                  ) }}">{{$director->firstname}} {{$director->lastname}}</a>

                </td>


                <td>

                    {{$director->type}}

                </td>



                <td>

                    {{$director->annee}}

                </td>



                <td>
                    <a href="{{ route('directors_editer',                  ["id" => $director->id])  }}"></a>

                    <a class="movietitre btn btn-warning btn-gradient dark btn-block btn-sm" href="{{ route("directors_editer",

                  ["id" => $director->id]


                  ) }}">Editer <span class="fa fa-edit"></span></a>
                </td>

                <td>

                    <a class="btn btn-danger btn-gradient dark btn-block btn-sm" href="{{ route('directors_delete',

                  ["id" => $director->id])  }}">Supprimer <span class="fa fa-trash-o"></span></a>

                </td>


                @endforeach

            </tr>



        </tbody>
    </table>


@endsection