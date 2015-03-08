@extends('layouts.master')

@section('content')
	    	 
					<div id="my-panel">
						<nav>
							<ul class="mainmenu" id="portmenu">
								<a href="{{{ action('HomeController@showPortfolio')}}}"><li class="portpage"><p id="textport">Work I've Done</p></li></a>
								<a href="{{{ action('HomeController@showResume')}}}"><li class="portpage"><p id="textresume">Who I Am</p></li></a>
								<a href="{{{ action('HomeController@showSkills')}}}"><li class="portpage"><p>What I Do</p></li></a>
								<a href="{{{ action('PostsController@index')}}}"><li class="portpage">My Blog</li></a>
							</ul>
						</nav>
					</div>
	   
	   <div class="container no-gutters">

			   	  	<div class="no-gutters col-md-12">
						
						<div class=" col-md-12 no-gutters">
							<h3><a class="col-md-1" id="menuRecall" href="#">Menu</a></h3>
						@if (Auth::guest())

						@else
							<a class="col-md-1" href="/logout" class="login-toggle header-btn header-btn-xl"> <h5>Logout</h5></a>
			   	  		@endif
						</div>
			   	  		
			   	  		
			   	  	</div>
			   	  	<div class="col-md-12">
			   	  		<div class="row">
			   	  			
			   	  		</div>

			   	  		
			   	  	</div>
			  	
		</div><!-- End Container-->

@stop

