@extends('layouts.master')

@section('content')
	<div class="backgroundimg">
		<div class="container-full">
			<div class="row">
				<div class="col-lg-12">
					<ul class="col-sm-2  nav nav-stacked" id="menucontrol">
						<li class="active text-right"><a href="">Work I've Done</li></a>
						<li class="active text-right"><a href="#">Who I Am</li></a>
						<li class="active text-right"><a href="#">What I Do</li></a>
						<li class="active text-right"><a href="{{{ action('PostsController@index')}}}">My Blog</li></a>
					</ul>
				</div>
			</div> <!-- row -->
			
		</div>	<!-- Container Full-->
	</div>	<!-- backgroundimg -->
		

		
		
		
		

		
		
	
@stop

