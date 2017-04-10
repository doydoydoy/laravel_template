<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}" />
</head>
<body>
	<nav class="navbar">
		@include('/layout.nav')
	</nav>
	<div id="banner">
		@include('/layout.banner')
	</div>
	
	<div id="wrapper" class="container">
	@if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
	@endif
	<div class="row">
		<div id="content_area" class="col-xs-9">
			@yield('content')
		</div>

		<div id="sidebar" class="col-xs-3">
			@yield('sidebar')
		</div>
	</div>
	</div>
	<footer>
		@include('/layout.footer')
	</footer>
</body>
</html>