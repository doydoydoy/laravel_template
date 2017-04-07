<!DOCTYPE html>
<html>
<head>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">

		body
		{
			padding: 20px;
		}

		a
		{
			color: black;
		}

	</style>

	<title>Article</title>
</head>
<body>

@if(Session::has('message'))
	<p class="alert{{Session::get('alert-class')}}">
		{{Session::get('message')}}
	</p>
@endif

@foreach($articles as $key => $article)
	<div>
		<a href='{{url("articles/$article->id")}}'>{{$article->title}}</a>
	</div>
@endforeach

	<a href='{{url("articles/create")}}'><button>Add Article</button></a>


</body>
</html>
