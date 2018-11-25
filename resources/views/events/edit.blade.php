@extends('layouts.app')


@section('content')
<br>
<h1>Éditer l'évènement # {{ $event->id }} </h1>

@include('layouts.partials._formEdit')

<p><a href="{{ route('home') }}">Annuler</a></p>

@stop