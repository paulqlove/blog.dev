<!DOCTYPE html>
<html>
	<head>
		<title>Laravel Blog</title>
		<meta charset="utf-8">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
		
		<link rel="stylesheet" type="text/css" href="/css/custom.css">
		<script src="/js/jquery.min.js"></script>
	</head>
	
	<body>

				
			@if(Session::has('errorMessage'))
				<div class="alert alert-danger">{{{ Session::get('errorMessage')}}}</div>

			@endif
		<!--	@yield('posts') -->
			@yield('content')
		<script type="text/javascript" src="/js/my_blog.js"></script>
	</body>
</html>

 