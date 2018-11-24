@extends('layouts.app')


@section('content')
<h1>Créer un nouvel évènement</h1>
<form action="{{ route('events.store') }}" method="POST">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="title" class="control-label text-success sr-only" >Titre de l'évènement</label>
		<input type="text" name="title" placeholder="Titre de l'évènement" value="{{ old('title') }}" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" id="title">
	{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
	</div>
	
	<div class="form-group">
		<label for="description" class="control-label text-success sr-only" >Description de l'évènement</label>
		<textarea name="description" id="" cols="30" rows="10" placeholder="Description de l'évènement" class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}">{{ old('description')}}
		</textarea>
	{!! $errors->first('description', '<span class="help-block">:message</span>') !!}
	</div>
	
	<div class="form-group">		
	<input type="submit" value="Créer cet évènement" class="btn btn-primary btn-block">
	</div>
</form>

<p><a href="{{ route('home') }}">Annuler</a></p>
@stop