@extends('layouts.master')

@section('content')
<h1>All Posts</h1>
<table class="table table-striped table-bordered">
	<tr>
		<th>Title</th>
		<th>URL</th>
		<th>Content</th>
{!! $posts->render() !!}
	</tr>
		@foreach ($posts as $post)
		<tr>
			<td>{{ $post->title }}</td>
			<td>{{ $post->url }}</td>
			<td>{{ $post->content }}</td>
		</tr>
		@endforeach
</table>

@stop