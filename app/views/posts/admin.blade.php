<!-- Post Admin  -->

@extends('layout.master')


@section('content')

<h1> Liste des articles</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th> Id</th>
			<th> Nom</th>
			<th> Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
			<tr>
					<th>{{ $post->id }} </th>
					<th>{{ $post->name }} </th>
					<th>
						
						<a class= "btn btn-primary"href="{{ URL::route('posts.edit',$post->id) }}">Editer</a>&nbsp;
						<a class= "btn btn-danger "href="#">Supprimer</a>
					</th>
			</tr>
		@endforeach
	</tbody>
</table>

@stop