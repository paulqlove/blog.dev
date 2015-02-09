@extends('layouts.master')

@section('content')
@if(Session::has('successMessage'))
	<div class="alert alert-success">{{{ Session::get('successMessage')}}}</div>
@endif
	
	<div class="container">
		<nav >
			<form role="search" action="{{{ action('PostsController@index') }}}" method="get"> 
					<ul id="indexmenu">
						<li role="presentation" class="landingpage"><a href="{{{action('HomeController@showPortfolio')}}}">Work I've Done</a></li>
						<li role="presentation" class="landingpage"><a href="#">Who I Am</a></li>
						<li role="presentation" class="landingpage"><a href="#">What I Do</a></li>
						<li role="presentation" class="landingpage"<a href="{{{ action('PostsController@index')}}}">My Blog</a></li>
					    <li><input name="search" type="text" class="movesearchbar" placeholder="search"></li>
						<li><button type="submit" class="movesearchbar ">Submit</button></li>
					 </ul>			
			</form>
		</nav><!-- navbar default -->
					<h1>My Blog</h1>
					<table>
						<thead>
							<th>Title</th>
							<th>Blog Entry</th>
							<th>Date</th>
							<th>Actions</th>
						</thead>
						<tbody>
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
						</tbody>
					</table>
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
			
		
		</div><!--Secondsection -->



@stop
