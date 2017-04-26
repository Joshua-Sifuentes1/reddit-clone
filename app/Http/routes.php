<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/sayhello/{name?}', function($name = '')
{
	if ($name == 'Joshua') {
		return Redirect::to('/');
	}
	$data = ['name' => $name];
	return view('my-first-view', $data);
});

Route::get('/uppercase/{word?}', function($word = "uppercase") 
{
	$data = [
		'word' => $word,
		'uppercase' => strtoupper($word)
	];
	return view('uppercase', $data);
});

Route::get('/increment/{number?}', function($number = 0) 
{
	$data = [];
	if (is_numeric($number)) {
		$data['number'] = $number + 1;
	} else {
		$data['number'] = $number . " is not a number.";
	}
	return view('increment', $data);
});

Route::get('/add/{num1?}/{num2?}', function($num1 = 0, $num2 = 0) {
	if (is_numeric($num1) && is_numeric($num2)) {
		return $num1 + $num2;
	} else {
		return "Both parameters must be numeric.";
	}
});

Route::get('rolldice/{guess}', function($guess) {
	$diceRoll = rand(1, 6);
	if (!is_numeric($guess) || $guess < 1 || $guess > 6) {
		$message = "Please pick a number from 1-6.";
	} else if ($guess == $diceRoll) {
		$message = "You guessed correctly!";
	} else {
		$message = "You did not guess correctly.";
	}
	$data = [
		'guess' => $guess, 
		'diceRoll' => $diceRoll,
		'message' => $message
		];
	return view('roll-dice', $data);
});

Route::resource('posts', 'PostsController');
Route::resource('students', 'StudentsController');
Route::get('orm-test', function ()
{
	// $user = new \App\User();
	// $user->name = 'Joshua';
	// $user->email = 'joshua@codeup7.com';
	// $user->password = 'password';
	// $user->save();

	// $post = new \App\Models\Post();
	// $post->title = 'My first post';
	// $post->content = "My first post content";
	// $post->url = 'http://codeup.com';
	// $post->created_by = $user->id;
	// $post->save();

	// return \App\Models\Post::all();
});