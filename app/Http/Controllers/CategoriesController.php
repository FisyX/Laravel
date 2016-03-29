<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CategoriesRequest;

class CategoriesController extends Controller
{


    public function lister()
    {

        $categories = Categories::all();

        //dump($movies);

        return view("categories/list", [

            'allCategories' => $categories
        ]);

    }


    public function editer($id)
    {
        //dump($id);

        $categories = Categories::find($id);


        $prenom = 'Matrix';
        return view("categories/edit", [
            'id' => $id,
            'prenom' => $prenom
        ]);

    }


    public function creer()
    {
        return view("categories/creer");
    }


    public function voir($id)
    {

        $categories = Categories::find($id);

        return view("categories/voir", [

            'categories' => $categories
        ]);
    }

    public function enregistrer(CategoriesRequest $request)
    {

        $titre = $request->title;
        $description = $request->description;
        $synopsis = $request->synopsis;
        $budget = $request->budget;
        $annee = $request->annee;
        $bo = $request->bo;
        $visible = $request->visible;


        $categories->title = $titre;
        $categories->description = $description;
        $categories->synopsis = $synopsis;
        $categories->budget = $budget;
        $categories->annee = $annee;
        $categories->bo = $bo;
        $categories->visible = $visible;
        $categories->save();


        return Redirect::route("categories_lister");
    }


    public function delete($id)
    {
        $categories = Categories::find($id);
        $categories->delete();

        return Redirect::route("categories_lister");
    }


    public function panier(Request $request, $id)
    {
        $categorie = Categories::find($id);


        $tab = $request->session()->get('id_categories', []);

        if (array_key_exists($id, $tab)) {

            unset($tab[$id]);
        } else {

            $tab[$id] = $categorie->title;


        }


    }

}