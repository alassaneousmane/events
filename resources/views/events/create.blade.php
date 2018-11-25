@extends('layouts.app')


@section('content')

<br>

<h1>Créer un nouvel évènement</h1>



<form action="{{ route('events.store') }}" method="POST">

	{{ csrf_field() }}

	@include('layouts.partials._form', ['submitButtonText' =>'Créer cet évènement'])
	
	
</form>

<p><a href="{{ route('home') }}">Annuler</a></p>

@stop