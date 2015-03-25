@extends('layouts.master')

@section('content')
	    	 
					<div id="my-panel">
						<nav>
							<ul class="mainmenu" id="portmenu">
								<button id="closeMenu"><img src="/images/blueclose.png" ></button>
								<a href="{{{ action('HomeController@showPortfolio')}}}"><li class="portpage  ripple"><p id="textport">Work I've Done</p></li></a>
								<a href="{{{ action('HomeController@showResume')}}}"><li class="portpage  ripple"><p id="textresume">Who I Am</p></li></a>	
								<a href="{{{ action('PostsController@index')}}}"><li class="portpage ripple"><p id="textblog">My Blog</p></li></a>
								<a href="{{{ action('HomeController@showLanding')}}}"><li class="portpage ripple"><p>Home</p></li></a>
							</ul>
						</nav>
					</div>
						<div class=" col-md-12 no-gutters">
							@if (Auth::guest())
								@include('partials.header')
							@else
								<a class="col-md-1" href="/logout" class="login-toggle header-btn header-btn-xl"> <h5>Logout</h5></a>
				   	  		@endif
						</div>
	   <div class="container no-gutters">	
			   	  	
						
			   	  		<div class="col-md-12 no-gutters">
			   	  		<ul class="img-list no-gutters">
			   	  			<div class="col-md-12 no-gutters">
			   	  				<div class="row" id="deleteMargin">
				   	  			<li class="col-md-12 portCovers no-gutters">
						    		<div class="col-md-10">
						    			<div class="hidden-sm hidden-xs col-md-2">
						    					
						    			</div>
			   	  							<button class="glyphicon glyphicon-chevron-left imageControl" id="prevImage"></button>
						    			<div class="col-md-10 no-gutters ServeWrapper">
						    				<a href="http://servesearch.us" target="_blank">
						    					<img class="embed-responsive-4by3 col-sm-offset-1 col-md-offset-2 img-size " id="serveImages" src=" ">
						    					<div class="col-sm-offset-1 col-md-offset-2 serveInfo">Serve Search is a web app that quickly connects people with volunteer events in their area, making giving back to the community easier to navigate. The site was built using, Laravel, PHP, MySQL, JavaScript, jQuery, and Bootstrap; development was done with Vagrant Environment; version control with Git and GitHub. Our site was designed mobile first, is fully responsive and creates a smooth and easy user experience. -Click on the Image</div>
						    				</a>
						    			</div>
						    				
						    			<span class="hidden-xs hidden-sm no-gutters textcontent" id="servelink">
						    				<h5 class="portTitleSizing" id="headerfixport">SERVE SEARCH</h5>
						    			</span>
						    				
						    		</div>
						    		<div class="hidden-sm hidden-xs col-md-2">			    			
						    					
						    		</div>
				   	  			</li>	    		
			   	  					<button  class="glyphicon glyphicon-chevron-right imageControl" id="changeImage"></button>
			   	  				</div>
			   	  			</div>
				   	  		<li class="col-md-12 portCovers no-gutters">
					   	  		<div class=" col-md-9">
					   	   			<div class="no-gutters duckWrapper">
						   	   			<a href="{{{ action('HomeController@showWhackamole')}}}">
						   	   				<img  class="embed-responsive-4by3  col-sm-offset-1 col-md-offset-4 img-size" id="duckImages" src="/images/duckhuntMock.jpg">
						   	   				<div class="col-sm-offset-1 col-md-offset-4 duckInfo">A class exercise to build our first game. Built using PHP, JavaScript, jQuery and HTML/ CSS. No Ducks were harmed in the making of this game. Click on the image to Play!</div>
						   	   			</a> 
					   	   			</div>
					   	   			<span class="hidden-xs hidden-sm textcontent" id="bottemSpan">
					   	   				<h5 class="col-md-12 portTitleSizing" id="whackTitle">DUCK HUNT</h5>
					   	   			</span>
					   	   				
					   	  		</div>
					   	  		<div class="col-md-3 portCovers" >
					   	  			
					   	  			
					   	  			
					   	  		</div>
				   	  		</li>
			   	  		</ul>
			   	  		</div>
			   	  	
		</div><!-- End Container-->

@stop

