@extends('layouts.master')

@section('content')
	    	 
					<div id="my-panel">
						<nav>
							<ul class="mainmenu" id="portmenu">
								<a href="{{{ action('HomeController@showPortfolio')}}}"><li class="portpage"><p id="textport">Work I've Done</p></li></a>
								<a href="{{{ action('HomeController@showResume')}}}"><li class="portpage"><p id="textresume">Who I Am</p></li></a>
								
								<a href="{{{ action('PostsController@index')}}}"><li class="portpage"><p id="textblog">My Blog</p></li></a>
								<a href="{{{ action('HomeController@showLanding')}}}"><li class="portpage"><p>Home</p></li></a>
							</ul>
						</nav>
					</div>
	   
	   <div class="container no-gutters">

							
			   	  	<div class="no-gutters col-md-12">
						@include('partials.header')
						<div class=" col-md-12 no-gutters">
						@if (Auth::guest())

						@else
							<a class="col-md-1" href="/logout" class="login-toggle header-btn header-btn-xl"> <h5>Logout</h5></a>
			   	  		@endif
						</div>
			   	  		
			   	  		<div class="col-md-12 no-gutters">

			   	  		<ul class="img-list">
			   	  			<li>
					    		<div class="col-md-9 embed-responsive-4by3">
					    			<a href="http://servesearch.us" target="_blank"><img class="  img-size col-md-offset-4"  src="/images/servesearch.png"></a>
					    			<span class="hidden-xs hidden-sm no-gutters textcontent" >
					    				<h5>Serve Search</h5>
					    				<p class="col-md-offset-2 col-md-8" id="serveText">Serve Search is a web app that quickly connects people with volunteer events in their area, making giving back to the community easier to navigate. The site was built using, Laravel, PHP, MySQL, JavaScript, jQuery, and Bootstrap; development was done with Vagrant Environment; version control with Git and GitHub. Our site was designed mobile first, is fully responsive and creates a smooth and easy user experience.<p>
					    			</span>
					    		</div>
					    		<div class="col-md-3">
					    			
					    			
					    			
					    		</div>
			   	  			</li>
				    		
				   	  		<li>
					   	  		<div class=" col-md-9 embed-responsive-4by3">
					   	   			<a href="{{{ action('HomeController@showWhackamole')}}}"><img  class=" img-size col-md-offset-4"  src="/images/duckhunt_small.png"></a> 
					   	   			<span class="hidden-xs hidden-sm textcontent">
					   	   				<h5>Whackamole</h5>
					   	   				<p class="col-md-offset-2 col-md-8" id="whackText">A class exercise to build our first game. Built using PHP, JavaScript, jQuery and HTML/ CSS. No Ducks were harmed in the making of this game.</p>
					   	   			</span>
					   	  		</div>
					   	  		<div class="col-md-3">
					   	  			
					   	  			<p ></p>
					   	  			<h5 class="summary">Click the picture to play!</h5>
					   	  		</div>
				   	  		</li>
			   	  		</ul>
			   	  		</div>
			   	  	</div>
			  	
		</div><!-- End Container-->

@stop

