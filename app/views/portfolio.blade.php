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
							<h3><a class="col-md-1" id="menuRecall" href="#">Menu</a></h3>
						@if (Auth::guest())

						@else
							<a class="col-md-1" href="/logout" class="login-toggle header-btn header-btn-xl"> <h5>Logout</h5></a>
			   	  		@endif
						</div>
			   	  		
			   	  		<div class="col-md-12 no-gutters">

			   	  		<ul class="img-list">
			   	  			<li>
					    		<div class="col-md-9 embed-responsive-4by3">
					    			<a href="http://servesearch.us" target="_blank"><img class="img-size col-md-offset-4" src="/images/servesearch.png"></a>
					    			<span class="hidden-xs hidden-sm no-gutters textcontent" >
					    				<h5>Serve Search</h5>
					    				<p>Feb 21st 2015</p>
					    			</span>
					    		</div>
					    		<div class="col-md-3">
					    			<h3 class="summary">Summary</h3>
					    			
					    			<p class="summary">Serve Search is a web app that quickly connects people with volunteer events in their area, making giving back to the community easier to navigate. The site was built using, Laravel, PHP, MySQL, JavaScript, jQuery, and Bootstrap; development was done with Vagrant Environment; version control with Git and GitHub. Our site was designed mobile first, is fully responsive and creates a smooth and easy user experience.<p>
					    		</div>
			   	  			</li>
				    		<li>
					    		<div class=" col-md-9 embed-responsive-4by3">
					    			<img  class="img-size col-md-offset-4" src="/images/todolist_small.png"> 
					    			<span class="hidden-xs hidden-sm textcontent">
					    				<h5>Todo List</h5>
					    				<p>Dec 10th 2014</p>
					    			</span>
					    		</div>
					    		<div class="col-md-3">
					    			<h3 class="summary">Summary</h3>
					    			<p class="summary">This was a project that we started builing a couple of weeks into class. Refactoring our code was something we did everytime we worked on this project. It was built using PHP, HTML and CSS. </p>
					    		</div>
				    		</li>
				   	  		<li>
					   	  		<div class=" col-md-9 embed-responsive-4by3">
					   	   			<a href="{{{ action('HomeController@showWhackamole')}}}"><img  class="img-size col-md-offset-4"  src="/images/duckhunt_small.png"></a> 
					   	   			<span class="hidden-xs hidden-sm textcontent">
					   	   				<h5>Whackamole</h5>
					   	   				<p>Jan 10th 2015</p>
					   	   			</span>
					   	  		</div>
					   	  		<div class="col-md-3">
					   	  			<h3 class="summary">Summary</h3>
					   	  			<p class="summary">A class exercise to build our first game. Built using PHP, JavaScript, jQuery and HTML/ CSS. No Ducks were harmed in the making of this game.</p>
					   	  			<h5 class="summary">Click the picture to play!</h5>
					   	  		</div>
				   	  		</li>
			   	  		</ul>
			   	  		</div>
			   	  	</div>
			  	
		</div><!-- End Container-->

@stop

