@extends('layouts.master')

@section('content')
	    	 
					<div id="my-panel">
						<nav>
							<ul class="mainmenu" id="portmenu">
								<button id="closeMenu"><img src="/images/blueclose.png" ></button>
								<a href="{{{ action('HomeController@showPortfolio')}}}"><li class="portpage ripple"><p id="textport">Work I've Done</p></li></a>
								<a href="{{{ action('HomeController@showResume')}}}"><li class="portpage ripple"><p id="textresume">Who I Am</p></li></a>
								
								<a href="{{{ action('PostsController@index')}}}"><li class="portpage ripple"><p id="textblog">My Blog</p></li></a>
								<a href="{{{ action('HomeController@showLanding')}}}"><li class="portpage ripple"><p>Home</p></li></a>
							</ul>
						</nav>
					</div>
	   <div class="container no-gutters">
			   	  	<div class="no-gutters col-md-12">
						<div class=" col-md-12 no-gutters">
							@include('partials.header')
						@if (Auth::guest())

						@else
							<a class="col-md-1" href="/logout" class="login-toggle header-btn header-btn-xl"> <h5>Logout</h5></a>
			   	  		@endif
						</div>
			   	  	</div>
			   	  	<div class="col-md-12" id="headerfix">
			   	  		<div class="row">
			   	  			<div class="col-md-12" id="backImage">
			   	  				<div class="col-md-8">
			   	  				</div>
			   	  				<div class="col-md-4 embed-responsive-4by3">
			   	  					<img src="/images/e_demoday-0015.jpeg"  class="portfolioProfile">
			   	  				</div>
			   	  			</div>
			   	  		</div>
			   	  		<div class="col-md-12 no-gutters">
			   	  			<div class="row">
			   	  				<div class="col-md-offset-3 col-md-8">
			   	  					<section itemscope itemtype="http://schema.org/Article">
			   	  						<h2 itemprop="articleSection" class="col-md-6 title"> The Digital</h2>
			   	  						<p itemprop="articleBody" class="col-md-10 portfolioContent">My enthusiasm for technology and creating led me to pursue a career in development. Having completed General Assembly’s Web Design Circuit course, I am armed with core strategic skills in design, layout, user experience, HTML and CSS. My over 800 hours spent in Code Up’s Full-Stack Immersive Bootcamp, honing my back-end craft, has made me proficient in PHP, JavaScript, Laravel, jquery and MySQL. I’m a triple-threat in my unique ability and passion for blending thoughtful strategy, imaginative design and seamless execution in development.</p>
			   	  					</section>
			   	  				</div>
			   	  				<div class="col-md-offset-3 col-md-8">
			   	  					<section itemscope itemtype="http://schema.org/Article">
			   	  						<h2 itemprop="articleSection" class="col-md-6 title">The Analog</h2>
			   	  						<p itemprop="articleBody" class="col-md-10 portfolioContent">Here’s a little bit about me. I grew up in Chattanooga Tennessee and have always had a thirst to try new experiences.  I’m a self proclaimed tinkerer,  and like to dabble in woodworking and charcuterie.  I love hitting the road and traveling with my wife and two dogs.</p>
			   	  					</section>
			   	  				</div>
			   	  				<div class="col-md-offset-3 col-md-9">
			   	  					<section itemscope itemtype="http://schema.org/Article">
			   	  						<h2 itemprop="articleSection" class="col-md-12 title">Skills</h2>
				   	  						<div class="row  noMargin">
				   	  						<ul itemprop="articleBody" class="style-list col-md-6 no-gutters">
				   	  							<li>Html</li>
				   	  							<li>CSS</li>
				   	  							<li>PHP</li>
				   	  							<li>MySQL</li>
				   	  							<li>Adobe Creative Suite</li>
				   	  							<li>Javascript</li>
				   	  							<li>JQuery</li>
				   	  							<li>Linux</li>
				   	  							<li>Apache</li>
				   	  							<li>Responsive Design</li>
				   	  							<li>Wireframing</li>
				   	  							<li>Omnigraffle</li>
				   	  						</ul>
				   	  						</div>
			   	  					</section>
			   	  				</div>
			   	  			</div>
			   	  		</div>
			   	  	</div>
			  	
		</div><!-- End Container-->

@stop

