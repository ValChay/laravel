@extends('layout.master')


@section('content')

{{ Form::open() }}

<div class ="form-group" >
	{{ Form::label('name','Nom') }}
	{{ Form::text('name',$posts->name,['class'=>'form-control']) }}

	{{ Form::label('content','Contenu ;') }}
	{{ Form::textarea('content',$posts->content,['class'=>'form-control']) }}

	{{ Form::submit('Envoyer',['class'=>'btn btn-primary']) }}

</div>

{{ Form::close() }}

@stop