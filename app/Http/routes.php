<?php

Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'auth'], function () {





	Route::get('/',[
			"as" => "homepage",
			"uses" => "HomeController@homepage",
	]);




	Route::get('/contact', function () {

		return view('static/contact');

	});



	Route::get('/mon_compte', [
			'as' => 'mon_compte',
			'uses' => 'HomeController@mon_compte']);



	Route::get('/concept', function () {

		return view('static/concept');

	});

	Route::get('/A propos', function () {

		return view('A propos');

	});


	Route::group(['prefix' => 'movies'], function () {

		Route::get('/lister', [
				'as' => 'movies_lister',
				'uses' => 'MoviesController@lister']);

		Route::get('/lister', [
				'as' => 'movies_lister',
				'uses' => 'MoviesController@lister']);

		Route::get('/editer/{id}', [
				'as' => 'movies_editer',
				'uses' => 'MoviesController@editer'])
				->where('id', '[0-9]+');

		Route::post('/modifier/{id}', [
				'as' => 'movies_modifier',
				'uses' => 'MoviesController@modifier'])
				->where('id', '[0-9]+');

		Route::get('/voir/{id}', [
				'as' => 'movies_voir',
				'uses' => 'MoviesController@voir'
		])->where('id', '[0-9]+');

		Route::get('/creer', [
				'as' => 'movies_creer',
				'uses' => 'MoviesController@creer']);

		Route::post('/enregistrer', [
				'as' => 'movies_enregistrer',
				'uses' => 'MoviesController@enregistrer']);

		Route::get('delete/{id}', [
				'as' => 'movies_delete',
				'uses' => 'MoviesController@delete']);

		Route::get('/panier/{id}',[
				'as' => 'movies_panier',
				'uses' => 'MoviesController@panier']);

	});


	Route::group(['prefix' => 'categories'], function () {

		Route::get('/lister', [
				'as' => 'categories_lister',
				'uses' => 'CategoriesController@lister']);

		Route::get('/editer/{id}', [
				'as' => 'categories_editer',
				'uses' => 'CategoriesController@editer'])
				->where('id', '[0-9]+');

		Route::get('/voir/{id}', [
				'as' => 'categories_voir',
				'uses' => 'CategoriesController@voir'
		])->where('id', '[0-9]+');

		Route::get('/creer', [
				'as' => 'categories_creer',
				'uses' => 'CategoriesController@creer']);

		Route::post('/enregistrer', [
				'as' => 'categories_enregistrer',
				'uses' => 'CategoriesController@enregistrer']);

		Route::get('delete/{id}', [
				'as' => 'categories_delete',
				'uses' => 'CategoriesController@delete']);


		Route::get('/panier/{id}',[
				'as' => 'categories_panier',
				'uses' => 'CategoriesController@panier']);


	});


	Route::group(['prefix' => 'actors'], function () {

		Route::get('/lister', [
				'as' => 'actors_lister',
				'uses' => 'ActorsController@lister']);

		Route::get('/editer/{id}', [
				'as' => 'actors_editer',
				'uses' => 'ActorsController@editer'])
				->where('id', '[0-9]+');

		Route::get('/voir/{id}', [
				'as' => 'actors_voir',
				'uses' => 'ActorsController@voir'
		])->where('id', '[0-9]+');

		Route::get('/creer', [
				'as' => 'actors_creer',
				'uses' => 'ActorsController@creer']);

		Route::post('/enregistrer', [
				'as' => 'actors_enregistrer',
				'uses' => 'ActorsController@enregistrer']);

		Route::get('delete/{id}', [
				'as' => 'actors_delete',
				'uses' => 'ActorsController@delete']);

		Route::get('/panier/{id}',[
				'as' => 'actors_panier',
				'uses' => 'ActorsController@panier']);

	});


	Route::group(['prefix' => 'directors'], function () {

		Route::get('/lister', [
				'as' => 'directors_lister',
				'uses' => 'DirectorsController@lister']);

		Route::get('/editer/{id}', [
				'as' => 'directors_editer',
				'uses' => 'DirectorsController@editer'])
				->where('id', '[0-9]+');

		Route::get('/voir/{id}', [
				'as' => 'directors_voir',
				'uses' => 'DirectorsController@voir'
		])->where('id', '[0-9]+');

		Route::get('/creer', [
				'as' => 'directors_creer',
				'uses' => 'DirectorsController@creer']);

		Route::post('/enregistrer', [
				'as' => 'directors_enregistrer',
				'uses' => 'DirectorsController@enregistrer']);

		Route::get('delete/{id}', [
				'as' => 'directors_delete',
				'uses' => 'DirectorsController@delete']);

		Route::get('/panier/{id}',[
				'as' => 'directors_panier',
				'uses' => 'DirectorsController@panier']);

});

});