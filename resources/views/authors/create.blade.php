{{-- @extends('layouts.app1') --}}
@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header text-center">
			<h1>Create Author</h1>
		</div>
  		<div class="card-body">
    		{!! Form::open(['action' => 'authorsController@store', 'methode' => 'POST']) !!}
				<div class="form-group">
					{{Form::label('FirstName', 'FirstName')}}
					{{Form::text('FirstName', '', ['class' => 'form-control', 'placeholder' => 'FirstName'])}}
					@if ($errors->has('FirstName'))
                                <span class="error ">
                                    <strong>{{ $errors->first('FirstName') }}</strong>
                                </span>
					@endif
				          
				</div>
				<div class="form-group">
					{{Form::label('LastName', 'LastName')}}
					{{Form::text('LastName', '', ['class' => 'form-control', 'placeholder' => 'LastName'])}}
					@if ($errors->has('LastName'))
                                <span class="error ">
                                    <strong>{{ $errors->first('LastName') }}</strong>
                                </span>
					@endif
				</div>
				<div class="form-group">
					{{Form::label('Email', 'Email')}}
					{{Form::text('Email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
					@if ($errors->has('Email'))
                                <span class="error ">
                                    <strong>{{ $errors->first('Email') }}</strong>
                                </span>
					@endif
				</div>
				<div class="text-center">
					{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
				</div>
			{!! Form::close() !!}
  		</div>
  		<div class="card-footer">
  			<a href="../authors" class="btn btn-default">[ ◄ Go Back ]</a>
  		</div>
	</div>
@endsection
