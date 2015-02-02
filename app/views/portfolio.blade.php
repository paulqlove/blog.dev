@extends('layouts.master')

@section('content')
    <h1>Hello, Welcome to the porfolio page of {{ $name }}</h1>
    <a href="{{ action('HomeController@showResume')}}">Click to go my Resume</a>
@stop

