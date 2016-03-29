<?php



namespace App\Http\Controllers;

use App\Actors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ActorsController extends Controller{


    public function lister(){

        $actors = Actors::all();

        //dump($movies);

        return view("actors/list",[

            'allActors' => $actors
        ]);

    }


    public function editer($id){
        //dump($id);

        $actors = Actors::find($id);


        $prenom = 'Matrix';
        return view("actors/edit",[
            'id' => $id,
            'prenom' => $prenom
        ]);

    }


    public function creer(){
        return view("actors/creer");
    }


    public function voir($id){

        $actors = Actors::find($id);

        return view("actors/voir",[

            'actors' => $actors
        ]);
    }








    public function enregistrer(Request $request){

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $image = $request->image;



        $actors = new Actors();


        if(Input::file('img')){


            $filename = Input::file('img')->getClientOriginalName();


            $destinationPath = public_path().'/uploads/actors';

            Input::file('img')->move($destinationPath, $filename);



            $actors->image = asset('uploads/actors/'.$filename);

        }





        $actors->firstname = $firstname;
        $actors->lastname = $lastname;
        $actors->save();


        return Redirect::route("actors_lister");
    }



    public function delete($id)
    {
        $actors = Actors::find($id);
        $actors->delete();
    }



    public function panier(Request $request,$id)
    {
        $actors = Actors::find($id);


        $tab = $request->session()->get('id_actors', []);
        $tab[$id] = $actors->firstname;


        $request->session()->put('id_actors', $tab);

        return Redirect::route('actors_lister');

    }



}