<?php
/**
 * Created by PhpStorm.
 * User: wal07
 * Date: 17/03/16
 * Time: 09:48
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{

    protected $table = 'user';


    public function getUser()
    {
        $users = DB::table('user')
            ->get();


        return $users;
    }



}