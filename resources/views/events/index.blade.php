@extends('layouts.app')


@section('jumbotron')

<section class="jumbotron container text-center">
        
          <h1 class="jumbotron-heading">{{ $events->count() }} {{ str_plural('Évènements', $events->count()) }}</h1>
         @if($events->count() > 0)
		<ul class="events">
			@foreach($events as $event)
			<li>
				<a href="{{ route('events.show', ['event' => $event ]) }}">{{ $event->title }}</a>
			</li>
			@endforeach
		</ul>
		@else
		<p class="alert alert-info">Aucun évènement pour le moment </p>
		@endif
        <a href="{{ route('events.create') }}" class="btn btn-primary my-2"><i class="fa fa-plus"></i> Créer un nouvel évènement</a>
        <a href="{{ route('events.index') }}" class="btn btn-secondary my-2"><i class="fas fa-eye"></i> Voir la liste des évènements en cours</a>
        
</section>
        <div class="album py-5 bg-light container">
          <div class="row">
            @foreach($events as $event)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">{{ $event->description }}.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{ route('events.show', ['event' => $event->id]) }}" class="btn btn-sm btn-outline-secondary">View</a>
                      <a href="{{ route('events.edit', ['event' => $event->id]) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                    </div>
                    <small class="text-muted"> {{ (new \DateTime($event->created_at))->format('d/m/Y H:i:s') }}</small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>

@stop