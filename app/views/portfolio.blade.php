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
			   	  	
						<div class="row no-gutters">
						
			   	  		<div class="col-md-12 no-gutters">
		   	  				<div class="row no-gutters">
			   	  				<div class="col-md-12 no-gutters">
	   	  							<button class="col-md-2 glyphicon glyphicon-chevron-left imageControl hidden" id="prevImage"></button>
							    		<div class="col-md-12 no-gutters ServeWrapper">
							    			
							    			<div class="img_margin ">
							    				<a href="http://servesearch.us" target="_blank">
							    					<img class="embed-responsive-4by3  img-size " id="serveImages" src=" ">
							    					<div class=" serveInfo">Serve Search is a web app that quickly connects people with volunteer events in their area, making giving back to the community easier to navigate. The site was built using, Laravel, PHP, MySQL, JavaScript, jQuery, and Bootstrap; development was done with Vagrant Environment; version control with Git and GitHub. Our site was designed mobile first, is fully responsive and creates a smooth and easy user experience. -Click image to visit</div>
							    				</a>
							    			</div>
							    				
							    			<span class="hidden-xs hidden-sm no-gutters textcontent" id="servelink">
							    				<h5 class="" id="headerfixport">SERVE SEARCH</h5>
							    			</span>
							    		</div>
   	  								<button class="col-md-2 glyphicon glyphicon-chevron-right imageControl hidden " id="changeImage"></button>
			   	  				</div>
			   	  			</div>
			   	  			<div class=" row no-gutters">
				   	  			<div class="col-md-12 no-gutters">
					   	   			<div class="col-md-12 no-gutters duckWrapper">
						   	   			
						   	   				<div class="img_margin ">
							   	   				<img  class="embed-responsive-4by3 img-size" id="duckImages" src="/images/duckhuntMock.jpg">
							   	   				<div class="hidden-xs duckInfo">A class exercise to build our first game. Built using PHP, JavaScript, jQuery and HTML/ CSS. No Ducks were harmed in the making of this game. </div>
						   	   				</div>
						   	   			
					   	   			</div>
					   	   			<span class="hidden-xs hidden-sm textcontent" id="bottemSpan">
					   	   				<h5 class="col-md-12 " id="whackTitle">DUCK HUNT</h5>
					   	   			</span>
					   	   				
					   	  		</div>
					   	  		{{-- <div class="col-md-2 portCovers" >
					   	  		</div> --}}
				   	  		</div> {{-- /row --}}
			   	  			<div class="row no-gutters" id="deleteMargin">
				   	  			<div class="col-md-12 no-gutters">
			   	  					<button class="col-md-2 glyphicon glyphicon-chevron-left imageControl hidden" id="prevImageFaso"></button>
					   	  					<div class="col-md-12 no-gutters ServeWrapper">
					   	  						<div class="img_margin ">
						   	  						<a href="http://faso.com" target="_blank">
							   	  						<img class="embed-responsive-4by3 img-size " id="fasoImages" src=" ">
							   	  						<div class="hidden-xs fasoInfo">This is a template built for a company that focuses on marketing and hosting sites for artist. 
							   	  						</div>
						   	  						</a>
					   	  						</div>
					   	  					</div> {{-- /serveWrapper --}}
					   	  				<span class="hidden-xs hidden-sm no-gutters textcontent" id="faso">
					   	  					<h5 class="" id="headerfixport">FASO</h5>
					   	  				</span>
					   	  			
			   	  					<button class="col-md-2 glyphicon glyphicon-chevron-right imageControl hidden " id="changeImageFaso"></button>
					   	  		</div>
				   	  		</div> {{-- /deletemargin --}}
			   	  		
			   	  		</div>
			   	  	</div> {{-- /row --}}
		</div><!-- End Container-->

@stop

