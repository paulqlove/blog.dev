@extends('layouts.master')

@section('content')
	   <div class="page">
	    	 <h1>Portfolio</h1>
	    
				<button id="menuRecall">MENU</button>

					<ul class="mainmenu" id="portmenu">
						<li class="landingpage"><a href="{{{ action('HomeController@showPortfolio')}}}">Work I've Done</li></a>
						<li class="landingpage"><a href="{{{ action('HomeController@showResume')}}}">Who I Am</li></a>
						<li class="landingpage"><a href="#">What I Do</li></a>
						<li class="landingpage"><a href="{{{ action('PostsController@index')}}}">My Blog</li></a>
					</ul>
			
		    	
			   	  	<section id="hideproject1">
			   	  		<h2>Duck Hunt</h2>
			   	  		<h5>Week 5</h5>
			   	  	</section>
			   	   		<img class="boxes"  src="/images/duckhunt_small.png"> 
			    	<section id="hideproject2">
			    		<h2>ToDo List</h2>
			   	  		<h5>Week 4</h5>
			   	   	</section>	
			    			<img class="boxes" id="pic2" src="/images/todolist_small.png"> 
			    	
		</div><!-- End Container-->
@stop

