{{-- @extends('layouts.app1') --}}
@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header text-center">
			<h1>Create Book</h1>
		</div>
  		<div class="card-body">
    		{!! Form::open(['action' => 'booksController@store', 'methode' => 'POST']) !!}
				<div class="form-group">
					{{Form::label('title', 'Title')}}
					{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
				</div>
				<div class="form-group">
					{{Form::label('author', 'Author : ')}}
					{{Form::select('author', [
						'',
						'Authers' => $data
					], '', ['class' => 'form-control'])}}
				</div>
				<div class="text-center">
					{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
				</div>
			{!! Form::close() !!}
  		</div>
  		<div class="card-footer">
  			<a href="../books" class="btn btn-default">[ ◄ Go Back ]</a>
  		</div>
	</div>
@endsection