@extends('layouts/master')

@section('content')
	<h1>Original word:</h1>
	<h3>{{ $word }}</h3>
	<h1>Uppercased word:</h1>
	<h3>{{ $uppedWord }}</h3>
@stop