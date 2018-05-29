@extends('layout.master')

@section('content')

{{ Form::open(['route'=>'users.store']) }}
	<div class="form-group">
		{{ Form::label('username','nom D\'utilisateur') }}
		{{ Form::text('username','',['class'==>'form-control']) }}
	</div>
	<div class="form-group">
		{{ Form::label('password','Mot de passe') }}
		{{ Form::password('password','',['class'==>'form-control']) }}

	</div>



{{ form::close() }}

@stop