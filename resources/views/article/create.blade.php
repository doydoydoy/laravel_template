<!DOCTYPE html>
<html>
<head>
	<title>Create Article</title>
</head>
<body>

<form method="POST" action='{{url("articles/create")}}'>
	{{csrf_field()}}
	<input type="text" name="title"></input><br>
	<textarea name="content"></textarea>
	<input type="submit" value="Create"></input>
</form>

</body>
</html>