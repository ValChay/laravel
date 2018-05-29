<?php

class UserController extends BaseController {

	public function login(){

		return View::make('users.login');
	}

	public function check(){

		$inputs = Input::all();// Contenue des champs du formulaire
		// Si on a coché la case remember sa renvoi true et ne pas oublier de mettre largument dans le if auth
		if($inputs['remember']){ 
			$remember = true;
		}
		//e pour échapper les caractère évite les injections
		$inputs['username'] = e($inputs['username']);
		$inputs['password'] = e($inputs['password']);
		$validation = Validator::make($inputs,[

			'username' =>'required',
			'password' =>'required',
		]);
		//Si erreur, reviens en arrière et récup les erreurs
		if($validation->fails()){//
			return Redirect::back()->withErrors($validation);

		}
		else{//Vérifie si les champs sont bien remplies avec redirection et messages selon
			if(Auth::attempt(['username'=>$inputs['username'],'password'=>$inputs['password']],$remember )){
				Auth::attempt(['username'=>$inputs['username'],'password'=>$inputs['password']],$remember );

				return Redirect::route('home')->with('success','Connection réussie!!');
			}
			else{
				return Redirect::back()->with('error','Le mot de passe ou nom est incorrect');
			}
		}
	}

	public function logout(){

		Auth::logout();
		return Redirect::route('home')->with('success','Vous n\'êtes plus connectés');
	}

}