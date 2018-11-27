@extends('layouts.app')

@section('content')
<br>
<h3># {{ $event->id }}</h3>
<p>{{ $event->title }}</p>
<p>{{ $event->description }}</p>

<a href="{{ route('events.edit', ['event' => $event]) }}" class="btn btn-primary">Modifier</a>
<a href="{{ route('events.destroy', $event) }}" data-method="DELETE" data-confirm="Êtes-vous sûr de vouloir supprimer # {{ $event->title }}" class="btn btn-danger">Supprimer</a>
{{-- <form 
	action="{{ route('events.destroy', $event) }}" 
	method="POST" 
	class="i nline-block"
	onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer #{{ $event->title }}');">
	{{ csrf_field() }}
	{{ method_field('DELETE') }}
	<input type="submit" value="Supprimer cet évènement" class="btn btn-danger">
</form> --}}
<hr>
<p><a href="{{ route('home') }}">Voir tous les évènements</a></p>
@endsection