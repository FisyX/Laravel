<?php namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Actors extends Model{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'actors';


    public function getAgeActors(){

        $age = DB::table('actors')
            ->avg(DB::raw('TIMESTAMPDIFF(year,dob,NOW())'));

        return round($age);

    }

}
