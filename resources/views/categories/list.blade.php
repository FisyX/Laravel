


@extends('layout')


@section('content')




    <div class="col-md-10">

        <h1 style="margin-top: -2px">Liste des catégories</h1>

    </div>


    <div class="col-md-2">


        <th><a  style="margin-bottom: 15px" class="btn btn-hover btn-success" href="{{ route('categories_creer')  }}">Créer une catégorie</a></th>

    </div>





    <table class="table table-striped">
        <thead>
        <tr>
            <th class="w10 bg-dark">like</th>
            <th class="w100 bg-dark">Affiche</th>
            <th class="bg-dark">Catégorie</th>
            <th class="w100 bg-dark"></th>
            <th class="w100 bg-dark"></th>
            <th class="w50 bg-dark">Editer</th>
            <th class="w50 bg-dark">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allCategories as $categorie)

            <tr>


                <td>

                    {{ $categorie->id }}

                    <a href="{{ route("categories_panier",[

                                'id' => $categorie->id

                                ]) }}">

                        @if(!array_key_exists($categorie->id, session('id_categories', [])))

                            <div class="fa fa-heart-o">
                            </div>

                        @else

                            <div class="fa fa-heart"></div>
                        @endif
                    </a>
                </td>

                <td>

                    <img style="width:100%" src="{{$categorie->image}}">
                </td>


                <td>

                    <a class="movietitre" href="{{ route("categories_voir",

                  ["id" => $categorie->id]


                  ) }}">{{$categorie->title}}</a>

                </td>


                <td>

                    {{$categorie->type}}

                </td>



                <td>

                    {{$categorie->annee}}

                </td>



                <td>
                    <a href="{{ route('categories_editer',                  ["id" => $categorie->id])  }}"></a>

                    <a class="movietitre btn btn-warning btn-gradient dark btn-block btn-sm" href="{{ route("categories_editer",

                  ["id" => $categorie->id]


                  ) }}">Editer <span class="fa fa-edit"></span></a>
                </td>

                <td>

                    <a class="btn btn-danger btn-gradient dark btn-block btn-sm" href="{{ route('categories_delete',

                  ["id" => $categorie->id])  }}">Supprimer <span class="fa fa-trash-o"></span></a>

                </td>


                @endforeach

            </tr>



        </tbody>
    </table>


@endsection