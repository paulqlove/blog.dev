<!DOCTYPE html>
<html>
	<head>
		<title>Laravel Blog</title>
		<meta charset="utf-8">
	
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
		
		<link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/custom.css">
		<script src="/js/jquery.min.js"></script>

		  <script>
		  if (!window.jQuery) {
		    document.write('<script src="/js/jquery.min.js"><\/script>');
		}
		</script>
	</head>
	<body>

				
			@if(Session::has('errorMessage'))
				<div class="alert alert-danger">{{{ Session::get('errorMessage')}}}</div>

			@endif
		
			@yield('content')

			<!-- +++++ No Script Fallback notice +++++ -->
			<noscript>
			    <div>
			      Turn on your JavaScript!
			  </div>
			</noscript>

		<script type="text/javascript" src="/js/my_blog.js"></script>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="/css/bootstrap/js/bootstrap.min.js"></script>
		
	</body>
</html>

