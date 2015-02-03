@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="page-header "><H1>My blog</H1></div>
				
				{{ Form::open(array('action' => 'PostsController@store')) }}
				<!-- <form method="POST" action="{{{ action('PostsController@store') }}}"> -->
				
				@include('posts.form')	
				{{ Form::submit('Submit', array('class' => 'name')) }}
				
				{{ Form::close() }}
	</div>	
@stop

