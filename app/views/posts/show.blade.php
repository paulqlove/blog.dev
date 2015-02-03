@extends('layouts.master')

@section('content')

		<p>{{ $posts->title }}</p>
		<p>{{ $posts->body }}</p>


<a href="{{{ action('PostsController@index') }}}">Go Back</a>

@stop