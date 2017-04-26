@extends('layouts.master')

@section('content')
<h1>Create Student</h1>
<form style="padding: 10px;" action="{{ action('StudentsController@store') }}" method="POST">
	@include('partials.students-form')
	<input type="submit" class="btn btn-default" value="Create">
</form>

@stop