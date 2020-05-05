{{-- @extends('layouts.app1') --}}
@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-sm">
					<h1>Authors</h1>
				</div>
				<div class="col-sm"></div>
				<div class="col-sm">
					<div class="float-right">
						<a href="{{ url('/') }}/authors/create" class="btn btn-primary" >
							<i class="fa fa-plus-circle"> Add authors</i>
						</a>
					</div>
				</div>
			</div>
		</div>
  		<div class="card-body">
    		<table class="table" style="text-align: center">
				<thead>
					<th>Name</th>
					<th>Actions</th>
				</thead>
				<tbody>
					@foreach ($authors as $author)
						<tr>
							<td>{{$author->Name}}</td>
							<td>{{$author->FirstName}}</td>
							<td>{{$author->LastName}}</td>
							<td>{{$author->Email}}</td>
							<td>
								{!! Form::open(['action' => ['authorsController@destroy', $author->id], 'methode' => 'POST']) !!}
									<a href="{{ url('/') }}/authors/{{$author->id}}" class="btn btn-info">
										<i class="fa fa-edit"> Info</i>
									</a>
									<a href="{{ url('/') }}/authors/{{$author->id}}/edit" class="btn btn-primary" >
										<i class="fa fa-edit"> Edit</i>
									</a>
									{{Form::hidden('_method', 'DELETE')}}
									{{Form::Button('<i class="fa fa-trash"> Delete</i>', ['type' => 'submit', 'class'=>'btn btn-danger'])}}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
  		</div>
  		<div class="card-footer">
  			<div class="row justify-content-center">
				<i>{{ $authors->links() }}</i>
			</div>
  		</div>
	</div>
@endsection