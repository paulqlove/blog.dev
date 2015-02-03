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
			//create new post		
			$post = new Post();
			return $this->savePost($post);
		
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
		
		$posts = Post::findorFail($id);
		return View::make('posts.show')->with('posts', $posts);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$posts = Post::findOrFail($id);
		return View::make('posts.edit')->with('posts', $posts);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		$post = Post::findOrFail($id);
		return $this->savePost($post);

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

	protected function savePost($post)
	{

		$validator = Validator::make(Input::all(), Post::$rules);
		
		if ($validator->fails()) {
			Session::flash('errorMessage', ' Failed to save your post!');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			Session::flash('successMessage', 'Filed saved!');
			//create title and body
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			//save it 
			$post->save();
			//redirect to the index action of post controller
			return  Redirect::action('PostsController@index');
		}
	}

}
