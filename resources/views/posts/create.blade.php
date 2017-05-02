@extends('layouts.master')

@section('content')
<!-- title, content, url -->
<h1>Create post</h1>
<form action="{{ action('PostsController@store') }}" method="POST">
	{!! csrf_field() !!}
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" id="title" name='title' class="form-control" value="{{ old('title') }}">
		@if ($errors->has('title'))
			{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
		@endif
	</div>
	<div class="form-group">
		<label for="url">URL</label>
		<input type="url" id="url" name='url' class="form-control" value="{{ old('url') }}">
	</div>
	<div class="form-group">
		<label for="content">Content</label>
		<textarea type="text" id="content" name='content' class="form-control" value="{{ old('content') }}"></textarea>
	</div>
	<input type="submit" class="btn btn-default" value="Create">
</form>

@stop