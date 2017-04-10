@extends('layout.master')

@section('title', 'Display All Articles')

@section('content')
	<h4>Display All Articles</h4>
	@foreach($articles as $key => $article)
		<p><a href='{{url("articles/$article->id")}}'>{{$article->title}}</a></p>
		<p>{{$article->content}}</p>
	@endforeach

	<a href='{{url("articles/create")}}'><button class='btn btn-primary'>Add Article</button></a>
@endsection

