@extends('layouts.app')

@section('content')
	<div class="card text-center">
		<div class="card-header">
			<h1>{{$book->title}} : </h1>
		</div>
  		<div class="card-body">
    		<p>Released on : {{$book->release_date}}</p>
    		<p>Created by : {{$book->author->name}}</p>
  		</div>
  		<div class="card-footer">
  			<a href="../books" class="btn btn-default">[ ◄ Go Back ]</a>
  		</div>
	</div>
@endsection