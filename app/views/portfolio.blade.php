@extends('layouts.master')

@section('content')
	    	 
					<div id="my-panel">
						<nav>
							<ul class="mainmenu" id="portmenu">
								<a href="{{{ action('HomeController@showPortfolio')}}}"><li class="portpage"><p id="textport">Work I've Done</p></li></a>
								<a href="{{{ action('HomeController@showResume')}}}"><li class="portpage"><p id="textresume">Who I Am</p></li></a>
								<a href="#"><li class="portpage"><p>What I Do</p></li></a>
								<a href="{{{ action('PostsController@index')}}}"><li class="portpage">My Blog</li></a>
							</ul>
						</nav>
					</div>
	   
	   <div class="container no-gutters">

			   	  	<div class="no-gutters col-md-12">
						
						<div class=" col-md-12 no-gutters">
							<h3><a class="col-md-11" id="menuRecall" href="#">Menu</h3></a>
						@if (Auth::guest())

						@else
							<a class="col-md-1" href="/logout" class="login-toggle header-btn header-btn-xl"> <h5>Logout</h5></a>
			   	  		@endif
						</div>
			   	  		
			   	  		<div class="col-md-12 no-gutters">

			   	  		<ul class="img-list">
			   	  			<li>
					    		<div class="col-md-9 embed-responsive-4by3">
					    			<img class="img-size col-md-offset-4" src="/images/servesearch.png">
					    			<span class="no-gutters textcontent" >
					    				<h5>Serve Search</h5><br>
					    				<p>Feb 21st 2015</p>
					    			</span>
					    		</div>
					    		<div class="col-md-3">
					    			
					    			<p class="summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					    		</div>
			   	  			</li>
				    		<li>
					    		<div class=" col-md-9 embed-responsive-4by3">
					    			<img  class="img-size col-md-offset-4" src="/images/todolist_small.png"> 
					    			<span class="textcontent">
					    				<h5>Todo List</h5><br>
					    				<p>Dec 10th 2014</p>
					    			</span>
					    		</div>
					    		<div class="col-md-3">
					    			
					    			<p class="summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					    		</div>
				    		</li>
				   	  		<li>
					   	  		<div class=" col-md-9 embed-responsive-4by3">
					   	   			<img  class="img-size col-md-offset-4"  src="/images/duckhunt_small.png"> 
					   	   			<span class="textcontent">
					   	   				<h5>Duck Hunt</h5><br>
					   	   				<p>Jan 10th 2015</p>
					   	   			</span>
					   	  		</div>
					   	  		<div class="col-md-3">
					   	  			
					   	  			<p class="summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					   	  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					   	  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					   	  			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					   	  			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					   	  			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					   	  		</div>
				   	  		</li>
			   	  		</ul>
			   	  		</div>
			   	  	</div>
			  	
		</div><!-- End Container-->

@stop

