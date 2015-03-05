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
			<div class=" col-md-12">
						@if (Auth::guest())
							<h3><a class="col-md-10" id="menuRecall" href="#">Menu</h3></a>
								<h4 class="col-md-2">My Blog</h4><br>
						@else
						<h3><a class="col-md-11" id="menuRecall" href="#">Menu</h3></a>
							<a class="col-md-1" href="/logout" class="login-toggle header-btn header-btn-xl"> <h5>Logout</h5></a>
							<a href="{{{ action('PostsController@index') }}}">Go Back</a>
							
			   	  		@endif
						</div>
					<div class="col-md-offset-2 col-md-8">
						
								@foreach($posts as $post)
							
								<div class="col-md-12">
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-12">
												<h2 class="col-md-12 blogTitle">{{ $post->title }}</h2>
												<h5><em>By:</em> {{{ $post->user->email }}}</h5>
											</div>
										</div>
									</div>
									
									<div class="col-md-10">
										<div class="col-md-8">
											<div class="col-md-12">	
												<p>{{ $post->body }}</p>
											</div>
										</div>
										<div class=" col-md-4 embed-responsive-4by3">
											
											<img class="post-img-size" src="{{{ $post->img_url }}}">
										</div>
									</div>
									<div class="col-md-2">
										@if (Auth::guest())
										@else
										<div class="col-md-12">
											<div class="col-md-12">
												<button><a href="{{{ action('PostsController@edit', $post->id)}}}">Edit</a></button>
											</div>
											<div class="col-md-12">
												{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete')) }}
												{{ Form::submit('Delete Post', array('class' ,'btn btn-danger')) }}
												{{ Form::close() }}
											</div>
										</div>
										@endif
									</div>

								</div>
								@endforeach
							

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
