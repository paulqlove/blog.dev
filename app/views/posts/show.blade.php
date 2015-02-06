@extends('layouts.master')

@section('content')

		<p>{{ $posts->title }}</p>
		<h5>by {{{ $posts->user->email }}}</h5>

<div class="post-body">	
	<p>{{ $posts->body }}</p>
	@if (Auth::check())
		
		<a href="{{{ action('PostsController@index') }}}">Go Back</a>

		{{ Form::open(array('action' => array('PostsController@destroy', $posts->id), 'method' => 'delete')) }}
			{{ Form::submit('Delete Post', array('class' ,'btn btn-danger')) }}
		{{ Form::close() }}
	@endif
	
	@if (Auth::guest())
		<h2>Welcome Guest</h2>
	@endif
</div>

@stop