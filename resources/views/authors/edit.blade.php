@extends('layouts.app')

@section('content')
	<h1>Edit Author</h1><br>
	{!! Form::open(['action' => ['authorsController@update', $author->id], 'methode' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="form-group">
			{{Form::label('FirstName', 'FirstName')}}
			{{Form::text('FirstName', $author->FirstName, ['class' => 'form-control', 'placeholder' => 'FirstName'])}}
		</div>
		<div class="form-group">
			{{Form::label('LastName', 'LastName')}}
			{{Form::text('LastName', $author->LastName, ['class' => 'form-control', 'placeholder' => 'LastName'])}}
		</div>
		<div class="form-group">
			{{Form::label('Email', 'Email')}}
			{{Form::text('Email', $author->Email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
		</div>
		{{Form::hidden('_method', 'PUT')}}
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection