@extends('layouts.master')

@section('content')
	
@foreach($posts as $post)
		<p>{{{ $post->title }}}</p>
		<p>{{{ $post->body }}}</p>
@endforeach

{{ $posts->links() }}
@stop