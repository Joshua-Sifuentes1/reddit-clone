@extends('layouts.master')

@section('content')
<h1>{{ $post->title }}</h1>
<p>Link: <a href="{{ $post->url }}">{{ $post->url }}</a></p>
<p>Created: {{ $time }}</p>
<p>{{ $post->content }}</p>


<!-- <table class="table table-striped table-bordered">
	<tr>
		<th>Title</th>
		<th>URL</th>
		<th>Content</th>
	</tr>
	<tr>
		<td>{{ $post->title }}</td>
		<td>{{ $post->url }}</td>
		<td>{{ $post->content }}</td>
	</tr>
</table> -->

@stop