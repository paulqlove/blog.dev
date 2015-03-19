<!DOCTYPE html>
<html>
	<head>
		<title>Paul Love - Developer</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<meta name="keywords" content="Paul Love, software developer, blog, Dallas, Texas, Codeup Student, programmer, web developer, programmer, create websites, html css jquery, laravel programmer, pretty code,starting to code, software engineer, resposnive design, mobile first, mobile, responsive">
	  	<meta name="description" content="This is the portfolio page for Paul Love, a web developer from Dallas Texas." >
	  	<meta name="author" content="Paul Love">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,500italic,700,100' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="/images/logoIcon.png">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/jquery.materialripple.css">
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

			@include('partials.footer')
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript" src="/js/easing.js"></script>
		<script type="text/javascript" src="/js/jquery.materialripple.js"></script>
		<script src="/css/bootstrap/js/bootstrap.min.js"></script>	
	    <script type="text/javascript" src="/js/my_blog.js"></script>
		
	    
	</body>
</html>

