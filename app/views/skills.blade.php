@extends('layouts.master')

@section('content')
	    	 
					<div id="my-panel">
						<nav>
							<ul class="mainmenu" id="portmenu">
								<a href="{{{ action('HomeController@showPortfolio')}}}"><li class="portpage ripple"><p id="textport">Work I've Done</p></li></a>
								<a href="{{{ action('HomeController@showResume')}}}"><li class="portpage ripple"><p id="textresume">Who I Am</p></li></a>
								<a href="{{{ action('HomeController@showSkills')}}}"><li class="portpage ripple"><p>What I Do</p></li></a>
								<a href="{{{ action('PostsController@index')}}}"><li class="portpage ripple">My Blog</li></a>
							</ul>
						</nav>
					</div>
	   
	   <div class="container no-gutters">

			   	  	<div class="no-gutters col-md-12">
							@include('partials.header')
						
						<div class=" col-md-12 no-gutters">
							<h3><a class="col-md-1" id="menuRecall" href="#">Menu</a></h3>
						</div>
			   	  		
			   	  		
			   	  	</div>
			   	  	<div class="col-md-12">
			   	  		<div class="row">
			   	  			
			   	  		</div>

			   	  		
			   	  	</div>
			  	
		</div><!-- End Container-->

@stop

