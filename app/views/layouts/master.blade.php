<!DOCTYPE html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<title>Laravel Blog</title>
	</head>
	<body>

		<div>			
			@if(Session::has('errorMessage'))
				<div class="alert alert-danger">{{{ Session::get('errorMessage')}}}</div>
			
			@endif
		<!--	@yield('posts') -->
			@yield('content')
		</div>
	</body>
</html>

 