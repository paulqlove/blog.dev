@extends('layouts.master')

@section('content')

<h1 class="page-header">Please Log In</h1>

{{ Form::Open(array('action' => 'HomeController@doLogin'))}}

<div class="form-group">
	{{ Form::label('email', 'eMail Address') }}
	{{ Form::email('email', Input::old('email'), array('class' => 'form-control'))}}
</div>

<div class="form-group">
	{{ Form::label('password', 'Password') }}
	{{ Form::password('password', array('class' => 'form-control'))}}
</div>

<div class="form-group">
	{{ Form::submit('log in!', array('class' => 'btn btn-primary'))}}
</div>

{{ Form::close() }}

@stop