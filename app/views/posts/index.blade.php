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
							<button id="closeMenu"><img src="/images/blueclose.png" ></button>
							   
							    	<input name="search" type="text" class="movesearchbar" id="inputPadding" placeholder="search">
							    
									<button type="submit" class="movesearchbar " id="buttonPadding"><p>Submit</p></button>
								
								<li  class="portpage"><a href="{{{action('HomeController@showPortfolio')}}}"><p id="textport">Work I've Done</p></a></li>
								<li  class="portpage"><a href="{{{ action('HomeController@showResume')}}}"><p id="textresume">Who I Am</p></a></li>
								
								<li  class="portpage"><a href="{{{ action('PostsController@index')}}}"><p id="textblog">My Blog</p></a></li>
								<li class="portpage"><a href="{{{ action('HomeController@showLanding')}}}"><p>Home</p></a></li>
						 </ul>			
							</form>
			</nav><!-- navbar default -->
		</div>

		<div class="col-md-12">
			<div class="row">
			
			<div class=" col-md-12 no-gutters">
						@if (Auth::guest())
							@include('partials.header')
						@else
						<h3><a class="col-md-11" id="menuRecall" href="#"><img src="/images/menu37.png"></h3></a>
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
							

					</div><!-- wraps foreach loop -->
				<div class="col-md-offset-4 col-md-8 ">
					<div class="pager" >
					{{ $posts->links() }}
					</div>
				</div>
		</div>
		</div> <!-- row -->
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
