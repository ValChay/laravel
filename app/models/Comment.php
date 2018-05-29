<?php

class Comment extends \Eloquent {
	protected  $guarded =['id','created_at'];


	public function post(){

		return $this->belongsTo('Post');
	}

	public function user(){

		return $this->belongsTo('User');
	}
}