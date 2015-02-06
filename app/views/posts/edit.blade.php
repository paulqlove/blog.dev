@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="page-header "><H1>My blog</H1></div>
				
			{{ Form::model($posts, array('action' => array('PostsController@update', $posts->id), 'method' => 'put','files' => 'true')) }}
			
			
			@include('posts.form')

			{{ Form::submit('Save Changes', array('class' => 'btn btn-primary'))}}
			
			{{ Form::close() }}
	</div>	
@stop
