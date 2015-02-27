@extends('layouts.master')

@section('content')

	<body id="logobody">
	<!-- 	<div id="bg">
			<img src="/images/hero.jpg">
		</div> -->
			
				<img src="/images/logo2.png" id="logo">
			
		
			
				
					<ul class="mainmenu" id="landingmenu">
						<li class="landingpage"><a href="{{{ action('HomeController@showPortfolio')}}}">Work I've Done</li></a>
						<li class="landingpage"><a href="#">Who I Am</li></a>
						<li class="landingpage"><a href="#">What I Do</li></a>
						<li class="landingpage"><a href="{{{ action('PostsController@index')}}}">My Blog</li></a>
					</ul>
				
		</body>
			
	
	
	
@stop

