<?php

class CategoriesRequest extends FormRequest {


    public function rules(){

        return[
            'title' => 'required|min:10',
            'description' => 'required|min:10|max:250',

        ];

    }


    public function message(){

        return [
            'title.required' => 'Le champs est obligatoire',
            'description.required' => 'La description est             obligatoire',
            'title.min' => 'Le titre est trop court',
            'title.max' => 'Le titre est trop long',
            'description.min' => 'La description est trop             courte',
            'description.max' => 'La description est trop             longue',

        ];

    }


    public function authorize(){

        return true;

    }

}