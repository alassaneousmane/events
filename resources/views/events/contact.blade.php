@extends('layouts.app')


@section('jumbotron')

	<div class="card container text-center" style="margin-top: 10px">
	  <h5 class="card-header">Contacts</h5>
	  <div class="card-body">
	    <h5 class="card-title">Contact</h5>
	    <p class="card-text"><small class="text-muted">{{ $telephone }}</small></p>
	    <p class="card-text"><small class="text-muted">{{ $email }}</p>
	    <a href="{{ route('home') }}" class="btn btn-block btn-primary">Go home</a>
	  </div>
	</div>

@stop