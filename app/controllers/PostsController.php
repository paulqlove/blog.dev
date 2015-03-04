<?php

class PostsController extends \BaseController 
{
	public function __construct()
	{
		

		$this->beforeFilter('auth',array('except' => array('index','show')));
	}

	public function index()
	{	
		
		
		if(Input::has('search')){
			$search = Input::get('search');
			$query = Post::with('user');

			$query->where('title', 'like', '%' . $search . '%');
			$query->orWhere('body', 'like', '%' . $search . '%' );
			$query->orderBy('created_at', 'desc');
			
			
			$posts = $query->paginate(4);
			return View::make('posts.index')->with('posts', $posts);
		} else {

			$posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(4);
			return View::make('posts.index')->with('posts', $posts);
		}

		
	}


	public function create()
	{	

		// $post = new Post();
		// $post->user_id = Auth::id();
		return View::make('posts.show');
		// return "Navigating to http://blog.dev/posts/create should show a form for creating a posts";
		
	}


	
	public function store()
	{
			//create new post		
			$post = new Post();

			$post->user_id = Auth::id();
			// $post->title = Input::get('title');
			// $post->body = Input::get('body');
			
			// if(Input::hasFile('image_url')) {
			// 	$post->uploadImage(Input::file('image_url'));
			// }


			return $this->savePost($post);
			
	}
	
	public function show($id)
	{
		// return "should show a specific post that user wants. ";
		
		$posts = Post::findorFail($id);
		return View::make('posts.show')->with('posts', $posts);
	}


	
	public function edit($id)
	{
		$posts = Post::findOrFail($id);
		return View::make('posts.edit')->with('posts', $posts);
	}


	
	public function update($id)
	{
		
		$post = Post::findOrFail($id);
		// $post->title = Input::get('title');
		// $post->body = Input::get('body');
		if(Input::hasFile('img_url')) {
			$post->uploadImage(Input::file('img_url'));
		}
		return $this->savePost($post);

	}


	
	public function destroy($id)
	{
		try {
			$post = Post::findOrFail($id);

		} catch (ModelNotFoundException $e) {
			Log::warning("user made a bad PostsController request", array('id' => $id));
			App::abort(404);

		}

		$post->delete();

		Session::flash('successMessage', 'Post Deleted');

		return Redirect::action('PostsController@index');
	}

	protected function savePost($post)
	{

		$validator = Validator::make(Input::all(), Post::$rules);
		
		if ($validator->fails()) {
			Session::flash('errorMessage', ' Failed to save your post!');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			
			//create title and body
			$post->user_id =Auth::id();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			
			$post->save();

			if(Input::hasFile('image')) {
				$post->uploadFile(Input::file('image'));
			//save it 
			$post->save();
			}
			Session::flash('successMessage', 'Post successfully saved!');
			//redirect to the index action of post controller
			return  Redirect::action('PostsController@index');
		}
	}

}
