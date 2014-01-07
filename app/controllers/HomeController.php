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

	protected $layout = 'layouts.default';

	public function index()
	{
		$this->layout->content = View::make('default.index');
	}

	public function fibonacci($term)
	{
		if (is_int($term))
		{
			if ($term >= 0 && $term <= 1000000)
			{
				$number = exec(app_path('library/fibonacci-c/bin/fibonacci').' '.$term);
				$this->layout->content = View::make('default.fibonacci', compact('term', 'number'));
			}
			else
			{
				$this->layout->content = View::make('default.large');
			}
		}
		else
		{

		}
	}

}