@extends('layouts.app')


@section('content')
<br>
<h1>Éditer l'évènement # {{ $event->title }} </h1>

<form action="{{ route('events.update', ['event' => $event]) }}" method="POST">
	
	{{ method_field('PUT') }}

	{{ csrf_field() }}
 	
 	@include('layouts.partials._form', ['submitButtonText' => "Modifier l'évènement"])
	
	
</form>

<p><a href="{{ route('home') }}">Annuler</a></p>

@stop