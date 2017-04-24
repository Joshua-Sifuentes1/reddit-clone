@extends('layouts.master')

@section('content')
	@if (!empty($name))
    	<h1>Hello, {{ $name }}!</h1>
	@else
    	<h1>You must have a name, right?</h1>
	@endif
	
	<p>This is a paragraph.</p>
@stop