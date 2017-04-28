@extends('layouts.master')

@section('content')
    <h1>Welcome to the Home page!</h1>
    <a href="{{ action('PostsController@index')}}">View all Posts</a>
@stop
