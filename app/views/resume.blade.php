@extends('layouts.master')

@section('content')
    <h1>Hello, {{ $name }}</h1>
    <a href="{{ action('HomeController@showPortfolio')}}">Click to go my Portfolio</a>
@stop