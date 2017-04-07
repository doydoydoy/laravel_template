<!DOCTYPE html>
<html>
<head>
	<title>Create Article</title>
</head>
<body>

<form method="POST" action='{{url("articles/$article_to_be_edited->id/edit")}}'>
	{{csrf_field()}}
	<input type="text" name="title" value="{{$article_to_be_edited->title}}"></input><br>
	<textarea name="content">{{$article_to_be_edited->content}}</textarea>
	<input type="submit" value="Save Edit"></input>
</form>

</body>
</html>