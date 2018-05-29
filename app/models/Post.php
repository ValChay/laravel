<?php

class Post extends \Eloquent {
	protected  $guarded =['id','created_at'];


	public function user(){

		return $this->belongsTo('User');
	}

	public function comments(){

		return $this->hasMany('Comment');
	}
}