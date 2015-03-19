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
								<a href="{{{action('HomeController@showPortfolio')}}}"><li  class="portpage ripple"><p id="textport">Work I've Done</p></li></a>
							<a href="{{{ action('HomeController@showResume')}}}"><li  class="portpage ripple"><p id="textresume">Who I Am</p></li></a>	
							<a href="{{{ action('PostsController@index')}}}"><li  class="portpage ripple"><p id="textblog">My Blog</p></li></a>
							<a href="{{{ action('HomeController@showLanding')}}}"><li class="portpage ripple"><p>Home</p></li></a>
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
					<div class="col-md-offset-2 col-md-8 no-gutters" id="headerfixblog">
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
										<div class="col-md-7">
											<div class="col-md-12">	
												<p>{{ $post->body }}</p>
											</div>
										</div>
										<div class=" col-md-5 embed-responsive-4by3">
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
						{{ Form::open(array('action' => 'PostsController@store', 'files' => 'true')) }}
						@include('posts.form')	
						{{ Form::submit('Submit', array('class' => 'name', 'class' => 'actionButton')) }}
						{{ Form::close() }}
				</div>
			</div>
		@endif
		</div><!--Secondsection -->
@stop
