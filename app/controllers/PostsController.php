<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /post
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts =Post::paginate(5);
		return View::make('posts.index',compact('posts'));
	}

	public function show($slug)
	{
		
		$post = Post::where('slug',$slug)->firstOrFail();
		$author = $post->user;
		$comments = $post->comments;

		return View::make('posts.show',compact('post','author','comments'));
	}

}