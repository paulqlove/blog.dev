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

Route::get('/', function()
{
	return 'Hello Codeup';
});
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

Route::get('resume/{name}','HomeController@showResume');

Route::get('portfolio/{name}', 'HomeController@showPortfolio');


Route::resource('posts', 'PostsController');





