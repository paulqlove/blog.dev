@extends('layouts.master')

@section('content')

<div class="container-fluid no-gutters">
	<div class="col-xs-12 col-sm-12 col-md-4">
		<nav class="col-xs-12 col-sm-12 col-md-12">
						<form role="search" action="{{{ action('PostsController@index') }}}" method="get"> 
					<ul id="col-xs-12 col-sm-12 indexmenu">
							<button><img src="/images/button18.png"></button>
						    	<input name="search" type="text" class="movesearchbar" id="inputPadding" placeholder="search">
							<button type="submit" class="movesearchbar " id="buttonPadding"><p>Submit</p></button>
							<a href="{{{action('HomeController@showPortfolio')}}}"><li  class="portpage ripple"><p id="textport">Work I've Done</p></li></a>
							<a href="{{{ action('HomeController@showResume')}}}"><li  class="portpage ripple"><p id="textresume">Who I Am</p></li></a>	
							<a href="{{{ action('PostsController@index')}}}"><li  class="portpage ripple"><p id="textblog">My Blog</p></li></a>
							<a href="{{{ action('HomeController@showLanding')}}}"><li class="portpage ripple"><p>Home</p></li></a>
					 </ul>			
						</form>
		</nav><!-- navbar default -->
	</div>
	<div class="col-md-12">
		<div class="col-md-12">
			<div class="row">
				@if (Auth::guest())
					@include('partials.header')
				@else
				<a class="col-md-11" id="menuRecall" href="#"><img src="/images/menu37.png"></a>
					<a class="col-md-1" href="/logout" class="login-toggle header-btn header-btn-xl"> <h5>Logout</h5></a>
					<a  href="{{{ action('PostsController@edit', $posts->id)}}}">Edit</a>
						<a href="{{{ action('PostsController@index') }}}">Go Back</a>
						{{ Form::open(array('action' => array('PostsController@destroy', $posts->id), 'method' => 'delete')) }}
							{{ Form::submit('Delete Post', array('class' ,'btn btn-danger')) }}
						{{ Form::close() }}
	   	  		@endif
			</div>
		</div>
		<div class="col-md-12" id="headerfixblog">
			<div class="row">
				<h2 class="col-md-offset-4 blogTitle">{{ $posts->title }}</h2>	
			</div>
		</div>
			<div class="col-md-12">
				<div class="col-md-offset-2 col-md-4 post-body">	
					<p>{{ $posts->body }}</p>
				</div>
				<div class=" col-md-4 embed-responsive-4by3">
					<img class="post-img-size" src="{{{ $posts->img_url }}}">
				</div>
			</div>	
		</div>
	</div>
</div>

@stop