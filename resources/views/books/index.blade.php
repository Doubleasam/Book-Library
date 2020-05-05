{{-- @extends('layouts.app1') --}}
@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-sm">
					<h1>Books</h1>
				</div>
				<div class="col-sm"></div>
				<div class="col-sm">
					<div class="float-right">
						<a href="{{ url('/') }}/books/create" class="btn btn-primary" >
							<i class="fa fa-plus-circle"> Add books</i>
						</a>
					</div>
				</div>
			</div>
		</div>
  		<div class="card-body">
    		<table class="table" style="text-align: center">
				<thead>
					<th>Title</th>
					<th>Actions</th>
				</thead>
				<tbody>
					@foreach ($books as $book)
						<tr>
							<td>{{$book->title}}</td>
							<td>
								{!! Form::open(['action' => ['booksController@destroy', $book->id], 'methode' => 'POST']) !!}
									<a href="{{ url('/') }}/books/{{$book->id}}" class="btn btn-info">
										<i class="fa fa-edit"> Info</i>
									</a>
									<a href="{{ url('/') }}/books/{{$book->id}}/edit" class="btn btn-primary" >
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
				<i>{{ $books->links() }}</i>
			</div>
  		</div>
	</div>
@endsection