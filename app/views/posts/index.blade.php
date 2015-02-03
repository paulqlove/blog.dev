@extends('layouts.master')

@section('content')
@if(Session::has('successMessage'))
	<div class="alert alert-success">{{{ Session::get('successMessage')}}}</div>
@endif
	
@foreach($posts as $post)
	<div class="col-md-10 ">
		<h2>
			<p>{{{ $post->title }}}</p>
			<small><p>{{{ $post->body }}}</p></small>
		</h2>
		<a href="{{{ action('PostsController@show', $post->id)}}}">Read More</a>
	</div>
@endforeach
	{{ $posts->links() }}


@stop
