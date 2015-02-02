@extends('layouts.master')

@section('posts')
	<H1>Enter Your Name</H1>
	
	<form method="POST" action="{{{ action('PostsController@store') }}}">
		<input type="text" name="title" value="{{{ Input::old('title') }}}">
		{{ $errors->first('title', '<span class="help-block">:message</span>') }}

		<input type="text" name="body" value="{{{ Input::old('body') }}}">
		{{ $errors->first('body', '<span class="help-block">:message</span>') }}

		<button type="submit">Submit</button>
	</form>
@stop