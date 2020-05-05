@extends('layouts.app')

@section('content')
	<h1>Edit Book</h1><br>
	{!! Form::open(['action' => ['booksController@update', $book->id], 'methode' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="form-group">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', $book->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
		</div>
		<div class="form-group">
			{{Form::label('author', 'Author')}}
			{{Form::select('author', $author, $book->author_id, ['class' => 'form-control', 'placeholder' => 'Author'])}}
		</div>
		<div class="form-group">
			{{Form::label('released_date', 'Released Date : ')}}
			{{Form::date('released_date', \Carbon\Carbon::parse($book->released_date))}}
		</div>
		{{Form::hidden('_method', 'PUT')}}
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection