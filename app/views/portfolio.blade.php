@extends('layouts.master')

@section('content')
	    	 
					<div id="my-panel">
						<nav>
							<ul class="mainmenu" id="portmenu">
								<li class="landingpage"><a href="{{{ action('HomeController@showPortfolio')}}}">Work I've Done</li></a>
								<li class="landingpage"><a href="{{{ action('HomeController@showResume')}}}">Who I Am</li></a>
								<li class="landingpage"><a href="#">What I Do</li></a>
								<li class="landingpage"><a href="{{{ action('PostsController@index')}}}">My Blog</li></a>
							</ul>
						</nav>
					</div>
	   
	   <div class="container">

			   	  	<div class="col-md-12">
						
						<div class=" col-md-2">
							<a id="menuRecall" href="#"><h3>Menu</h3></a>
						</div>
			   	  		
			    		<div class="col-md-offset-3 col-md-9 embed-responsive-4by3">
			    			<img class="img-size" src="/images/servesearch.png">
			    		</div>
			   	  		
			   	  		<div class="col-md-offset-3 col-md-9 embed-responsive-4by3">
			   	   			<img  class="img-size"  src="/images/duckhunt_small.png"> 
			   	  		</div>
			    		
			    		<div class="col-md-offset-3 col-md-9 embed-responsive-4by3">
			    			<img  class="img-size" src="/images/todolist_small.png"> 
			    		</div>
			   	  	</div>
			  	
		</div><!-- End Container-->
@stop

