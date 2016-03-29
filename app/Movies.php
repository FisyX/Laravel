<?php namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Movies extends Model{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'movies';



    public function getNbMoviesActifs(){

        $nb = DB::table('movies')
            ->where('visible', 1)
            ->count();

        return $nb;

    }


    public function getNbMoviesTotalActifs(){

        $nbmoviestotal = DB::table('movies')
            ->count();

        return $nbmoviestotal;

    }










    public function getBudget(){

        $budget = DB::table('movies')
            ->sum('budget');

        return $budget;

    }


    public function getdureemovies(){

        $duree = DB::table('movies')
            ->avg(DB::raw('duree'));

        return round($duree);

    }


    public function getnotepress(){

        $notepress = DB::table('movies')
            ->avg(DB::raw('note_presse'));

        return round($notepress);

    }


}
