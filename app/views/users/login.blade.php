@extends('layout.master')

@section('content')
<!-- Pas besoin de préciser le if session message d'erreur ou succès ici puisqu'il apparaît déjà dans le layout-->
{{ Form::open(['route'=>'users.check']) }}
	<div class="form-group">
		{{ Form::text('username','',['placeholder'=>'username','class'=>'form-control']) }}
		@if($errors->first('username'))
			<div class="alert alert-danger">{{ $errors->first('username') }}</div>
		@endif
	</div>
	<div class="form-group">
		
		{{ Form::password('password',['class'=>'form-control']) }}
		@if($errors->first('password'))
			<div class="alert alert-danger">{{ $errors->first('password') }}</div>
		@endif
	</div>
	<div class="form-group">
		
		{{ Form::checkbox('remember','remember',false) }}
		Se souvenir de moi
	</div>
		{{ Form::submit('Se connecter',['class'=>'btn btn-primary']) }}
{{ Form::close() }}

@stop