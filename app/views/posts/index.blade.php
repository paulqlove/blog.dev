@extends('layouts.master')

@section('content')
@if(Session::has('successMessage'))
	<div class="alert alert-success">{{{ Session::get('successMessage')}}}</div>
@endif
	
	<div class="container indexcontainer">
		<form class="navbar-form navbar-left" role="search" action="{{{ action('PostsController@index') }}}" method="get">

		  <div class="form-group">
		    <input name="search" type="text" class="form-control" placeholder="search">
		  </div>
		  
		  <button type="submit" class="btn btn-default">Submit</button>
		
		</form>
		<div class="page-header text-center ">
			<div class="row">
				<div class="col-sm-12">
					<h1>My Blog</h1>
					<table class="col-sm-12 table table text-left">
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
										<a class="col-sm-2 text-center actionButton" href="{{{ action('PostsController@show', $post->id)}}}">Read More</a>
										<a class="col-sm-2 text-center  actionButton" href="{{{ action('PostsController@edit', $post->id)}}}">Edit</a>
										

										{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete')) }}
										{{ Form::submit('Delete Post', array('class' => 'actionButton')) }}
										{{ Form::close() }}
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-6 col-sm-offset-3">
					{{ $posts->links() }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<a class="btn btn-primary " href="{{{ action('PostsController@create')}}}">Add New</a>
				</div>
			</div>

		</div>
		<div class="container" id="secondsection" >
			<div class="row">
				<div class="col-sm-4 centerblock">
				<h1>My Blog</h1>
					{{ Form::open(array('action' => 'PostsController@store', 'files' => 'true')) }}
					{{--<!-- <form method="POST" action="{{{ action('PostsController@store') }}}"> -->--}}
					
					@include('posts.form')	
					{{ Form::submit('Submit', array('class' => 'name', 'class' => 'col-sm-4', 'class' => 'actionButton')) }}
					
					{{ Form::close() }}
				</div>
			</div>
		</div> <!-- Container -->
	</div>



@stop
