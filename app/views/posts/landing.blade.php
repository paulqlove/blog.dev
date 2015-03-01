@extends('layouts.master')

@section('content')

	<div class="container-fluid" id="landingpageBG">
		<div class="col-md-12">
			<div class="row">

			
				<div class="col-md-4">
					<nav class="col-md-12">
						<ul>
							<li class="landingpage"><a href="{{{ action('HomeController@showPortfolio')}}}">Work I've Done</li></a>
							<li class="landingpage"><a href="#">Who I Am</li></a>
							<li class="landingpage"><a href="#">What I Do</li></a>
							<li class="landingpage"><a href="{{{ action('PostsController@index')}}}">My Blog</li></a>
						</ul>
					</nav>
				</div>
			
		</div>	
			
			<div clas="col-md-12" id="fixtoBottem">
				<div class="row">
					<div class="col-xs-offset-2 col-sm-offset-8 col-xs-6  col-sm-4 col-md-offset-8 col-md-4 embed-responsive-4by3" >
						<img src="/images/logo2.png" id="logo">
					</div>
				</div>
			</div>	
		
	</div>
</div>




@stop

