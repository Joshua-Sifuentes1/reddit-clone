@extends('layouts.master')

@section('content')
<h1>All Posts</h1>
<table class="table table-striped table-bordered">
	<tr>
		<th>Title</th>
		<th>URL</th>
		<th>Content</th>
		<th>Created</th>
{!! $posts->render() !!}
	</tr>
		@foreach ($posts as $post)
		<tr>
			<td><a href="{{ action('PostsController@show', [$post->id]) }}">{{ $post->title }}</a></td>
			<td><a href="{{ $post->url }}">{{ $post->url }}</a></td>
			<td>{{ $post->content }}</td>
			<td>{{ $post->created_at }}</td>
		</tr>
		@endforeach
</table>

@stop