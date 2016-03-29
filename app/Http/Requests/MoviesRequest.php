<?php
/**
 * Created by PhpStorm.
 * User: wal07
 * Date: 11/03/16
 * Time: 14:06
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class MoviesRequest extends FormRequest {


    public function rules(){

        return [
            'title' => 'required|min:4|regex:/^[A-Za-z0-9]+$/|unique:movies',




        ];



    }


    public function messages(){

        return [
            'title.required' => 'Le titre est obligatoire',


        ];



}


    public function authorize(){

        return true;

    }


}