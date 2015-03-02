@extends('layouts.master')

@section('content')
@if(Session::has('successMessage'))
	<div class="alert alert-success">{{{ Session::get('successMessage')}}}</div>
@endif
	
	<div class="container-fluid">
		<div class="col-md-4">
			<nav class="col-md-12">
							<form role="search" action="{{{ action('PostsController@index') }}}" method="get"> 
						<ul id="indexmenu">
								<li  class="landingpage"><a href="{{{action('HomeController@showPortfolio')}}}">Work I've Done</a></li>
								<li  class="landingpage"><a href="#">Who I Am</a></li>
								<li  class="landingpage"><a href="#">What I Do</a></li>
								<li  class="landingpage"><a href="{{{ action('PostsController@index')}}}">My Blog</a></li>
							    <input name="search" type="text" class="movesearchbar" placeholder="search">
								<button type="submit" class="movesearchbar ">Submit</button>
						 </ul>			
							</form>
			</nav><!-- navbar default -->
		</div>

		<div class="col-md-12">
			<h3><a id="menuRecall" href="#">Menu</h3></a>
					<h1>My Blog</h1>
					<div class="col-md-9">
						<table class="table table-striped table-hover">
							<tr class="tableHeader">
								<th class="hidden">&nbsp</th> 
								<th>Title</th>
								<th>Blog Entry</th>
								<th>Date</th>
								<th>Actions</th>
							</tr>
								@foreach($posts as $post)
							
									<tr>
										<td>{{{ $post->title }}}</td>
										<td>{{{ $post->body }}}</td>
										<td>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y  h:i:s A') }}}</td>
										<td>
											<a class="" href="{{{ action('PostsController@show', $post->id)}}}">Read More</a>
											<a class="" href="{{{ action('PostsController@edit', $post->id)}}}">Edit</a>
											

											{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete')) }}
											{{ Form::submit('Delete Post', array('class' => 'actionButton','class' => 'landingpage')) }}
											{{ Form::close() }}
										</td>
									</tr>
									
								@endforeach
							
						</table>
					</div>
				</div>
				
				<div class="pagination" >
					
					{{ $posts->links() }}
					<a href="{{{ action('PostsController@create')}}}">Home</a>

				</div>
					
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
		
		</div><!--Secondsection -->



@stop
