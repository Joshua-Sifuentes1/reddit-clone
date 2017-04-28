<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$session = $request->session();
		$session->put('greet', 'hello world');

		$posts = \App\Models\Post::orderBy('created_at', 'Desc')->paginate(4);
		
		return view('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Request $request)
	{
		$session = $request->session();

		// $session->forget('greet');

		dd($request->session()->get('greet'));

		return view('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$rules = \App\Models\Post::$rules;

		$this->validate($request, $rules);

		$post = new \App\Models\Post();
		$post->title = $request->title;
		$post->url = $request->url;
		$post->content = $request->content;
		$post->created_by = 4;
		$post->save();

		return redirect()->action('PostsController@index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$post = \App\Models\Post::find($id);
		$time = $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A');
		return view('posts.show', compact('post', 'time'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$post = \App\Models\Post::find($id);
		return view('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$rules = \App\Models\Post::$rules;

        $this->validate($request, $rules);

		$post = \App\Models\Post::find($id);
		$post->title = $request->title;
		$post->url = $request->url;
		$post->content = $request->content;
		$post->created_by = 4;
		$post->save();

		return redirect()->action('PostsController@index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$post = \App\Models\Post::find($id);
		$post->delete();

		return redirect()->action('PostsController@index');
	}
}
