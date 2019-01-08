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
					{{Form::label('name', 'Name')}}
					{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
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
