<?php



namespace App\Http\Controllers;

use App\Directors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DirectorsController extends Controller{


    public function lister(){

        $directors = Directors::all();

        //dump($movies);

        return view("directors/list",[

            'allDirectors' => $directors
        ]);

    }


    public function editer($id){
        //dump($id);

        $directors = Directors::find($id);


        $prenom = 'Matrix';
        return view("directors/edit",[
            'id' => $id,
            'prenom' => $prenom
        ]);

    }


    public function creer(){
        return view("directors/creer");
    }


    public function voir($id){

        $directors = Directors::find($id);

        return view("directors/voir",[

            'directors' => $directors
        ]);
    }

    public function enregistrer(Request $request){

        $titre = $request->title;
        $description = $request->description;
        $synopsis = $request->synopsis;
        $budget = $request->budget;
        $annee = $request->annee;
        $bo = $request->bo;
        $visible = $request->visible;

        $directors = new Categories();
        $directors->title = $titre;
        $directors->description = $description;
        $directors->synopsis = $synopsis;
        $directors->budget = $budget;
        $directors->annee = $annee;
        $directors->bo = $bo;
        $directors->visible = $visible;
        $directors->save();


        return Redirect::route("directors_lister");
    }



    public function delete($id)
    {
        $directors = Directors::find($id);
        $directors->delete();
    }



    public function panier(Request $request, $id)
    {
        $director = Actors::find($id);


        $tab = $request->session()->get('id_directors', []);

        if (array_key_exists($id, $tab)) {

            unset($tab[$id]);
        } else {

            $tab[$id] = $director->title;


        }


    }



}