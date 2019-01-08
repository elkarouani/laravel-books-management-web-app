@extends('layouts.app')

@section('content')
	<h1>Edit Author</h1><br>
	{!! Form::open(['action' => ['authorsController@update', $author->id], 'methode' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="form-group">
			{{Form::label('name', 'Name')}}
			{{Form::text('name', $author->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
		</div>
		{{Form::hidden('_method', 'PUT')}}
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection