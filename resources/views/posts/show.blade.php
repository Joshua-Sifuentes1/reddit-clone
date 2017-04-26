@extends('layouts.master')

@section('content')
<div class="container">
	<h1>Single Post</h1>
	<table class="table table-striped table-bordered">
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
	</table>
</div>

@stop