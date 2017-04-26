@extends('layouts.master')

@section('content')
<div class="container">
	<h1>All Posts</h1>
	<table class="table table-striped table-bordered">
		<tr>
			<th>Title</th>
			<th>URL</th>
			<th>Content</th>
		</tr>
			@foreach ($posts as $post)
			<tr>
				<td>{{ $post->title }}</td>
				<td>{{ $post->url }}</td>
				<td>{{ $post->content }}</td>
			</tr>
			@endforeach
	</table>
</div>

@stop