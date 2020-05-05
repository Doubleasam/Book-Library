@extends('layouts.app')

@section('content')
	<div class="card text-center">
		@if ($books != null)
      <h6>The author hasn't any book yet</h6>
    @else
      <div class="card-header">
        <h1>{{$books[0]->author->FirstName}} : </h1>
        <h1>{{$books[0]->author->LastName}} : </h1>
        <h1>{{$books[0]->author->Email}} : </h1>
      </div>
      <div class="card-body">
        <ul class="list-group">
          <p>His books : </p>
          @foreach ($books as $book)
            <li class="list-group-item">{{$book->title}} ({{$book->release_date}})</li>
          @endforeach   
        </ul>
      </div>
      <div class="card-footer">
        <a href="../authors" class="btn btn-default">[ ◄ Go Back ]</a>
      </div>
    @endif
	</div>
@endsection