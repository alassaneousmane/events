@extends('layouts.app')

@section('content')

<h3># {{ $event->id }}</h3>
<p>{{ $event->title }}</p>
<p>{{ $event->description }}</p>

<a href="{{ route('events.edit', ['event' => $event->id]) }}" class="btn btn-primary">Modifier</a>
<form action="{{ route('events.destroy', $event) }}" method="POST" class="inline-block">
	{{ csrf_field() }}
	{{ method_field('DELETE') }}
	<input type="submit" value="Supprimer cet évènement" class="btn btn-danger">
</form>
<hr>
<p><a href="{{ route('home') }}">Voir tous les évènements</a></p>
@endsection