@extends('layout.master')

@section('content')
	<h4>Create New Article</h4>
	<form action="{{url('articles/create')}}" method="POST" class="form-horizontal">
		{{ csrf_field() }}
	  <div class="form-group">
	    <label for="title">Title:</label>
	    <input type="text" class="form-control" name="title">
	  </div>
	  <div class="form-group">
	    <label for="content">Content:</label>
	    <textarea class="form-control" name="content"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

@endsection