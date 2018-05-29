<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',['as'=>'home','uses'=> 'PostsController@index']);

Route::get('/posts/{slug}',['as'=>'posts.show','uses'=>'PostsController@show']);

Route::get('login',['as'=>'users.login','uses'=>'UserController@login']);

Route::post('check',['as'=>'users.check','uses'=>'UserController@check']);

Route::get('logout',['as'=>'users.logout','uses'=>'UserController@logout']);

Route::get('admin',['as'=>'home.admin','uses'=>'HomeController@admin','before'=>'auth']);