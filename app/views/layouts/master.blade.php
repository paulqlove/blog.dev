<!DOCTYPE html>
<html>
	<head>
		<title>Paul Love - Developer</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<meta name="robots" content="index, follow">
	  	<meta name="description" content="I'm a software developer from Dallas, Texas. I love getting weird and learning new things.">
	  	<meta name="description" content="This is the portfolio page for Paul Love, a web developer from Dallas Texas." >
	  	<meta name="author" content="Paul Love">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
		@include('partials.analyticstracking')
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,500italic,700,100' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="/images/logoIcon.png">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/jquery.materialripple.css">
		<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">	
		<link rel="stylesheet" type="text/css" href="/css/animate.css">
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
		<script type="text/javascript" src="/js/mobiledetect.js"></script>
		<script type="text/javascript" src="/js/jquery.smoothState.js"></script>	
	    <script type="text/javascript" src="/js/my_blog.js"></script>
		<script type="text/javascript">
		    /* * * CONFIGURATION VARIABLES * * */
		    var disqus_shortname = 'paullove';
		    
		    /* * * DON'T EDIT BELOW THIS LINE * * */
		    (function () {
		        var s = document.createElement('script'); s.async = true;
		        s.type = 'text/javascript';
		        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
		        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
		    }());
		</script>
	    
	</body>
</html>

