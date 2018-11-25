@extends('layouts.app')


@section('content')

<br>

<h1>Créer un nouvel évènement</h1>

@include('layouts.partials._formCreate')

<p><a href="{{ route('home') }}">Annuler</a></p>

@stop