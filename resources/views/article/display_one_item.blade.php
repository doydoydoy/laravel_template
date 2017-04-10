@extends('layout.master')

@section('title','Display One Item')

@section('content')
	<h4>Display One Article</h4>
		<p>{{$article->title}}</p>
		<p>{{$article->content}}</p>

		@foreach($article->comments as $key => $comment)
			<p>{{$comment->content}}</p>
		@endforeach


		<a href='{{url("articles/$article->id/edit")}}'><button class="btn btn-primary">Edit</button></a>
		<a href='{{url("articles/$article->id/delete")}}'><button class="btn btn-danger">Delete</button></a>

	<form action='{{url("comment/$article->id")}}' method="POST">
		{{ csrf_field() }}
		Comment: <br>
		<textarea name="content"></textarea><br>
		<input type="submit">
	</form>
@endsection