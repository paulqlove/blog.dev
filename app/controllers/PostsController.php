<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$posts = Post::paginate(4);
		return View::make('posts.index')->with('posts', $posts);
		// return "Navigating to http://blog.dev/posts should return an index of every blog post";
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		return View::make('posts.create');
		// return "Navigating to http://blog.dev/posts/create should show a form for creating a posts";
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Post::$rules);
		
		if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
		//create new post		
		$post = new Post();
		
		//create title and body
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		//save it 
		$post->save();
		//redirect to the index action of post controller
		return  Redirect::action('PostsController@index');
	}

}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// return "should show a specific post that user wants. ";
		
		return $post;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "Should be able to edit a specific post by finding it by its id";
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Update the post that was edited";
		//find a given post
		//set the input
		//save it 
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "delete the specified post and find it by id";
	}


}
