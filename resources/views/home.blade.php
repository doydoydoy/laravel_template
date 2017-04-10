@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                    You are logged in!
                    <p>{{Auth::user()->name}}</p>
                    <p>{{Auth::user()->email}}</p>
                    <p>{{Auth::user()->password}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
