@extends('layouts.master')

@section('content')
@if(Session::has('successMessage'))
	<div class="alert alert-success">{{{ Session::get('successMessage')}}}</div>
@endif
	
	<div class="container-fluid no-gutters">
		<div class="col-md-4">
			<nav class="col-md-12">
							<form role="search" action="{{{ action('PostsController@index') }}}" method="get"> 
						<ul id="indexmenu">
							    <input name="search" type="text" class="movesearchbar" placeholder="search">
								<button type="submit" class="movesearchbar " id="buttonPadding">Submit</button>
								<li  class="landingpage"><a href="{{{action('HomeController@showPortfolio')}}}"><p id="textport">Work I've Done</p></a></li>
								<li  class="landingpage"><a href="#"><p id="textresume">Who I Am</p></a></li>
								<li  class="landingpage"><a href="#">What I Do</a></li>
								<li  class="landingpage"><a href="{{{ action('PostsController@index')}}}">My Blog</a></li>
								<li class="landingpage"><a href="{{{ action('HomeController@showLanding')}}}">Home</a></li>
						 </ul>			
							</form>
			</nav><!-- navbar default -->
		</div>

		<div class="col-md-12">
			<div class="col-md-12">
				<h3><a id="menuRecall" href="#">Menu</h3></a>
					<h1>My Blog</h1><br>
			</div>
					<div class="col-md-offset-2 col-md-8">
						<table class="table table-striped table-hover " id="clickableRow">
							<tr class="tableHeader">
								<th class="hidden">&nbsp</th> 
								<th>Title</th>
								<th>Blog Entry</th>
								<th>Date</th>
								
							</tr>
								@foreach($posts as $post)
							
									<tr>
										<td class="hidden"> <a  href="{{{ action('PostsController@show', $post->id)}}}"></a></td>
										<td>{{{ $post->title }}}</td>
										<td>{{{ $post->body }}}</td>
										<td>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y  h:i:s A') }}}</td>
										
									</tr>

								@endforeach
							
						</table>
					</div>
				<div class="col-md-offset-4 col-md-8 ">
					<div class="pager" >
					{{ $posts->links() }}
					</div>
				</div>
		</div>
		
		@if(Auth::guest())	


		@else		
			<div  id="secondsection" >
				<div class="centerblock">
					<!-- <h1>My Blog</h1> -->
						{{ Form::open(array('action' => 'PostsController@store', 'files' => 'true')) }}
						{{--<!-- <form method="POST" action="{{{ action('PostsController@store') }}}"> -->--}}
						
						@include('posts.form')	
						{{ Form::submit('Submit', array('class' => 'name', 'class' => 'actionButton')) }}
						
						{{ Form::close() }}
				</div>
			</div>
		@endif
		</div><!--Secondsection -->
@stop
