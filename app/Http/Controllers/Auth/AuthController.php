<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller {

	protected $redirectPath = '/';

	protected $redirectTo = '/';
	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}


	/**
	 * Handle a registration request for the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postRegister(Request $request)
	{
		$validator = $this->validator($request->all());

		if ($validator->fails())
		{
			$this->throwValidationException(
					$request, $validator
			);
		}

		$this->auth->login($this->create($request->all()));

		return redirect($this->redirectPath());
	}
	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
				'name' => 'required|max:255|regex:/^[A-Za-z ]+$/',
				'firstname' => 'required|max:255',
				'description' => 'required|max:800',
				'photo' => 'image',
				'email' => 'required|email|max:255|unique:administrators',
				'password' => 'required|confirmed|min:6',
		],[
				'name.required' => 'Votre nom est requis',
				'name.max' => 'Votre nom est trop long',
				'email.required' => 'Votre email est requis',
				'email.unique' => 'Votre email est deja utilisé',
				'password.required' => 'Votre mdp est requis',
				'password.min' => 'Votre mdp est trop court',
				'password.confirmed' => 'Votre mdp doit etre identique',
		]);
	}


	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	protected function create(array $data)
	{
		// je recupere avec la class Input et la methode file()
		$file = Input::file('photo');

		if(Input::hasFile('photo')) {

			$filename = $file->getClientOriginalName();
			// Récupère le nom original du fichier
			$destinationPath = public_path().'/uploads/administrators';

			// Indique où stocker le fichier
			$file->move($destinationPath, $filename);
		}

		return User::create([
				'lastname' => $data['name'],
				'firstname' => $data['firstname'],
				'photo' => asset('uploads/administrators/'.$filename),
				'description' => $data['description'],
				'email' => $data['email'],
				'password' => bcrypt($data['password']),
		]);
	}


}
