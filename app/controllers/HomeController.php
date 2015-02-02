<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	public function sayHello()
	{
		return View::make('sayHello');
	}
	public function parks()
	{
		return 'Here are some national parks';
	}
	public function showNameAge($name, $age)
	{
		return "Hello $name! I hear you're $age years old";
	}
	public function showResume($name)
	{
		return View::make('resume')->with('name', $name);
	}
	public function rollDice($guess)
	{
		$roll = rand(1,6);
		if ($roll == $guess) {
			return "You guessed correctly! ";
		} else {

		return View::make('rolldice')->with('a', $roll);
		}	
	}
	public function showPortfolio($name)
	{
		return View::make('portfolio')->with('name', $name);
	}


	
}










