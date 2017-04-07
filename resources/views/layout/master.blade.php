<!DOCTYPE html>
<html>
	<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<title>@yield('title')</title>
</head>
<body>

	<nav class="navbar">
		
	</nav>

	<div id="banner" class="">
		@if(Session::has('message'))
		<p class="alert{{Session::get('alert-class', 'alert-info')}}">
			{{Session::get('message')}}
		</p>
		@endif
	</div>


	<div id="wrapper" class="container">
		
	</div>

@yield('sidebar')

</body>
</html>