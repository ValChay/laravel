@extends('layout.master')

@section('content')

<h2>{{ $post->name }}</h2>
<p>Posté par : {{ $author->username }} |
@if($post->counts_comment == 0)

Pas de com
@elseif($post->counts_comment == 1)
1 com

@else
{{ $post->counts_comment }} Commentaires
@endif

</p>
<p>{{ $post->content }}</p>

<h3>Les coms</h3>
@if($post->counts_comment == 0)

Pas encore de com

@else
		@foreach($comments as $comment)
				<h4>Commentaire posté par : {{ $comment->user->username }}</h4>
		@endforeach
@endif				

@stop