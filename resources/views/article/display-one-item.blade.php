<!DOCTYPE html>
<html>
<head>
	<title>Display One Item</title>
</head>
<body>

<div>
	<h3>{{$article->title}}</h3>
	<p>{{$article->created_at}}</p>
	<p>{{$article->content}}</p>
</div>

<a href='{{url("articles/$article->id/edit")}}'><button>Edit</button></a>
<a href='{{url("articles/$article->id/delete")}}'><button>Delete</button></a>

</body>
</html>
