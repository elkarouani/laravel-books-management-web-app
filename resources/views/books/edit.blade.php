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
			{{Form::select('author', $author, null, ['class' => 'form-control', 'placeholder' => 'Author'])}}
		</div>
		{{Form::hidden('_method', 'PUT')}}
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection