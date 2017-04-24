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

Route::get('/', function () 
{
	return view('welcome');
});

Route::get('/sayhello/{name?}', function($name = '')
{
	if ($name == 'Joshua') {
		return Redirect::to('/');
	}
	$data = ['name' => $name];
	return view('my-first-view', $data);
});

Route::get('/uppercase/{word?}', function($word = "UPPERCASE") 
{
	$uppedWord = strtoupper($word);
	$data = [
		'word' => $word,
		'uppedWord' => $uppedWord
	];
	return view('uppercase', $data);
});

Route::get('/increment/{number?}', function($number = 0) 
{
	if (is_numeric($number)) {
		return $number + 1;
	} else {
		return $number . " is not a number.";
	}
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