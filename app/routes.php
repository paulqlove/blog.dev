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

Route::get('/', 'HomeController@showLanding');

// Route::get('/', 'HomeController@showWelcome');
	
Route::get('parks', 'HomeController@parks');

// Route::get('say-hello/{name}', function($name) {
// 	if ($name == 'Ben') {
// 		return Redirect::to('http://google.com');
// 	}  else {

// 		return "Hello $name!";
		
// 	}
// });
Route::get('say-hello/{name}/{age}', 'HomeController@showNameAge' );


Route::get('/rolldice/{guess}', 'HomeController@rollDice');

Route::get('resume','HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::get('skills', 'HomeController@showSkills');

Route::get('whackamole', 'HomeController@showWhackamole');

Route::resource('posts', 'PostsController');

Route::get('login','HomeController@showLogin');

Route::post('/login','HomeController@doLogin');

Route::get('logout','HomeController@doLogout');

Route::get('googlea4855ffadb5a8f9a','HomeController@showGoogle');

Route::get('search', function ()
{
	$search = Input::get('search');
	$query = Post::with('user');
	$query->where('title', 'like', '%' . $search . '%');
	$query->orWhere('created_at', 'like', '%' . $search . '%');
	$query->orWhereHas('user', function($q){
		$search = Input::get('search');
		$q->where('email', 'like', '%' . $search . '%');
	});
	$posts = $query->orderBy('created_at', 'desc')->paginate(4);
	foreach ($posts as $post) {
		echo $post->title;
	}
});



	



