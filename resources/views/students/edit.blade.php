@extends('layouts.master')

@section('content')
<h1>Edit Student</h1>
<form style="padding: 10px;" action="{{ action('StudentsController@update') }}" method="POST">
	@include('partials.students-form')
	<input type="submit" class="btn btn-default" value="Update student information">
	{{ method_field('PUT') }}
</form>

<form action="{{ action('StudentsController@destroy') }}">
	{!! csrf_field() !!}
	<input type="submit" value="Delete" class="btn-danger">
	{{ method_field('DELETE') }}	
</form>

@stop