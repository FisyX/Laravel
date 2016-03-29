<?php



namespace App\Http\Controllers;

use App\Http\Requests\MoviesRequest;
use App\Movies;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class MoviesController extends Controller{




    public function lister(Request $request){

        $movies = Movies::all();

        //dump($movies);

        $id_movies = $request->session()->get('id_movies');



        return view("movies/list",[

            'allMovies' => $movies
        ]);

}

    public function editer($id){

        $movie = Movies::find($id);

        return view("movies/edit", [
            'movie' => $movie,
        ]);
    }


    public function modifier(Request $request, $id){


        $movie = Movies::find($id);

        $titre = $request->title;
        $description = $request->description;
        $synopsis = $request->synopsis;
        $budget = $request->budget;
        $annee = $request->annee;
        $image = $request->image;
        $bo = $request->bo;
        $visible = $request->visible;



        if(Input::file('img')){


            File::delete('/uploads/movies/'.basename($movie->image));

            $filename = Input::file('img')->getClientOriginalName();


            $destinationPath = public_path().'/uploads/movies';

            Input::file('img')->move($destinationPath, $filename);



            $movie->image = asset('uploads/movies/'.$filename);

        }




        $movie->title = $titre;
        $movie->description = $description;
        $movie->synopsis = $synopsis;
        $movie->budget = $budget;
        $movie->annee = $annee;
        $movie->bo = $bo;
        $movie->visible = $visible;

        $movie->save();


        return Redirect::route("movies_lister")->with('EditMess', 'Le film à bien été éditer !');

    }


    public function creer(){
        return view("movies/creer");
    }


    public function voir(Request $request,$id){

        $id_movies = $request->session()->get('id_movies', $id);
        dump($id_movies);


        $movie =Movies::find($id);



        return view("movies/voir",[

            'movie' => $movie
        ]);
    }

    public function enregistrer(MoviesRequest $request){

        $titre = $request->title;
        $description = $request->description;
        $synopsis = $request->synopsis;
        $budget = $request->budget;
        $annee = $request->annee;
        $image = $request->image;
        $bo = $request->bo;
        $visible = $request->visible;


        $movie = new Movies();


        if(Input::file('img')){


            $filename = Input::file('img')->getClientOriginalName();


            $destinationPath = public_path().'/uploads/movies';

            Input::file('img')->move($destinationPath, $filename);



            $movie->image = asset('uploads/movies/'.$filename);

        }

        $movie->title = $titre;
        $movie->description = $description;
        $movie->synopsis = $synopsis;
        $movie->budget = $budget;
        $movie->annee = $annee;
        $movie->bo = $bo;
        $movie->visible = $visible;

        $movie->save();


        return Redirect::route("movies_lister")->with('SuccessMess', 'Le film à bien été créer !');
    }



    public function delete($id)
    {
        $movies = Movies::find($id);
        $movies->delete();


        return Redirect::route("movies_lister")->with('DeleteMess', 'Le film à bien été supprimer !');
    }



    public function visible(Movie $id)
    {
        if($id->visible == 0){
            $id->visible = 1;
        }

        else {
            $id->visible = 0;

        }

        $id->save();

        return Redirect::route('movies_lister');


    }


    public function panier(Request $request,$id)
    {
        $movie = Movies::find($id);


        $tab = $request->session()->get('id_movies', []);

        if(array_key_exists($id, $tab)) {

            unset($tab[$id]);
        }

        else{

        $tab[$id] = $movie->title;



        }


        $request->session()->put('id_movies', $tab);

        return Redirect::route('movies_lister');

    }


}