@extends('layouts.master')

@section('content')
<!-- title, content, url -->
<h1>Edit post</h1>
<form action="{{ action('PostsController@edit') }}" method="POST">
	{!! csrf_field() !!}
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" id="title" name='title' class="form-control" value="{{ old('title') }}">
	</div>
	<div class="form-group">
		<label for="content">Content</label>
		<input type="text" id="content" name='content' class="form-control" value="{{ old('content') }}">
	</div>
	<div class="form-group">
		<label for="url">URL</label>
		<input type="url" id="url" name='url' class="form-control" value="{{ old('url') }}">
	</div>
	<input type="submit" class="btn btn-default" value="Edit">
</form>
<form action="{{ action('PostsController@destroy') }}" method="POST">
	{!! csrf_field() !!}
	<input type="submit" value="Delete" class="btn btn-danger">
	{{ method_field('DELETE') }}	
</form>

@stop