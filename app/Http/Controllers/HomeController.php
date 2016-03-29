<?php

namespace App\Http\Controllers;



use App\Directors;
use App\Movies;
use App\User;
use App\Actors;
use App\Users;

class HomeController extends Controller{



    public function mon_compte()
    {
        return view('mon_compte');
    }

    public function homepage(){

        $movie = new Movies();
        $nb = $movie->getNbMoviesActifs();
        $nbmoviestotal =                                 $movie->getNbMoviesTotalActifs();


        $directors = new Directors();
        $nbtotal = $directors->getNbDirectors();


        $users = new User();
        $nbusers = $users->getNbUsers();

        $budget = new Movies();
        $budget = $budget->getBudget();

        $age = new Actors();
        $age = $age->getAgeActors();

        $duree = new Movies();
        $duree = $duree->getdureemovies();

        $notepress = new Movies();
        $notepress = $notepress->getnotepress();


        $user = new Users();
        $users = $user -> getUser();


        return view('welcome',
            [
                'nb' => $nb,
                'nbtotal' => $nbtotal,
                'nbusers' => $nbusers,
                'nbmoviestotal' => $nbmoviestotal,
                'budget' => $budget,
                'age' => $age,
                'duree' => $duree,
                'notepress' => $notepress,
                'users' => $users

            ]);
    }



}