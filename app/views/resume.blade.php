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
			   	  			<div class="col-md-12 bottem-border">
			   	  				<div class="col-md-8">
			   	  					<h3>About Paul</h3>
			   	  				</div>
			   	  				<div class="col-md-4 embed-responsive-4by3">
			   	  					<img src="/images/e_demoday-0015.jpeg"  class="portfolioProfile">
			   	  				</div>

			   	  			</div>
			   	  		</div>

			   	  		<div class="col-md-12">
			   	  			<div class="row">
			   	  				<div class="col-md-offset-3 col-md-8">
			   	  					<section>
			   	  						<h4 class="col-md-6 title"> The Digital</h4>
			   	  						<p class="col-md-10 portfolioContent">My enthusiasm for technology and creating led me to pursue a career in development. Having completed General Assembly’s Web Design Circuit course, I am armed with core strategic skills in design, layout, user experience, HTML and CSS. My over 800 hours spent in Code Up’s Full-Stack Immersive Bootcamp, honing my back-end craft, has made me proficient in PHP, JavaScript, Laravel, jquery and bootstrap (among others). I’m a triple-threat in my unique ability and passion for blending thoughtful strategy, imaginative design and seamless execution in development.</p>
			   	  					</section>
			   	  				</div>
			   	  				<div class="col-md-offset-3 col-md-8">
			   	  					<section>
			   	  						<h4 class="col-md-6 title">The Analog</h4>
			   	  						<p class="col-md-10 portfolioContent">Lorem ipsum dolor sit amet, suspendisse quisque minima fusce in orci, massa eu fusce libero quisque nunc, nibh ipsum, cursus id aliquam lobortis, lectus et nisl aptent elit mollis. Ut aliquam erat, aliquam id nunc porttitor. Bibendum ligula dis curae fermentum, aliquet magnis neque pretium sed. Lectus eu dignissim vestibulum donec urna, massa mattis diam nullam cras interdum non, enim nunc nam sodales vivamus eu, lacus at eget odio leo mi, tincidunt amet et. Nunc nonummy, ligula magna, commodo sociosqu.</p>
			   	  					</section>
			   	  				</div>
			   	  				<div class="col-md-offset-3 col-md-8">
			   	  					<section>
			   	  						<h4 class="col-md-12 title">Skills</h4>
				   	  						<ul class="style-list col-md-10">
				   	  							<li>Html</li>
				   	  							<li>CSS</li>
				   	  							<li>Javascript</li>
				   	  							<li>JQuery</li>
				   	  							<li>PHP</li>
				   	  							<li>MySQL</li>
				   	  							<li>Linux</li>
				   	  							<li>Apache</li>
				   	  							<li>Adobe Creative Suite</li>
				   	  							<li>Responsive Design</li>
				   	  						</ul>
			   	  					</section>
			   	  				</div>
			   	  			</div>
			   	  		</div>
			   	  	</div>
			  	
		</div><!-- End Container-->

@stop

