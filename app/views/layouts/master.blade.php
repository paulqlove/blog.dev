<!DOCTYPE html>
<html>
	<head>
		<title>Laravel Blog</title>
		<meta charset="utf-8">
	
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
		
		<link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/custom.css">
		

		
			
	</head>
	<body>
		
			<noscript>
			    <div>
			      Turn on your JavaScript!
			  </div>
			</noscript>
				
			@if(Session::has('errorMessage'))
				<div class="alert alert-danger">{{{ Session::get('errorMessage')}}}</div>

			@endif
		
			@yield('content')

		
		<footer>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<h5>Contact</h5>
					</div>
					<div class="col-md-12">
						<ul>
							<li>linkedin</li>
							<li>Git</li>
							<li>email</li>
							<li>pin</li>
							
						</ul>
					</div>
				</div>

			</div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="/css/bootstrap/js/bootstrap.min.js"></script>	
	    <script type="text/javascript" src="/js/my_blog.js"></script>
	    
	</body>
</html>

