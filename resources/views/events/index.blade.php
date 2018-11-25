@extends('layouts.app')


@section('jumbotron')

<section class="jumbotron container text-center">

      @if(Session::has('notification.message'))
        <div class="alert alert-{{ Session::get('notification.type') }} alert-dismissible fade show" role="alert" style="margin-top: 20px">
        {{ Session::get('notification.message') }}
        </div>
      @endif     
          <h1 class="jumbotron-heading">{{ $nombreEvenements->count() }} {{ str_plural('Évènements', $nombreEvenements->count()) }}</h1>
         @if(!$nombreEvenements->isEmpty())
      		<ul class="events">
      			@foreach($nombreEvenements as $nombreEvenement)
      			<li>
      				<a href="{{ route('events.show', ['event' => $nombreEvenement->id ]) }}">{{ $nombreEvenement->title }}</a>
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
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text={{ $event->title}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">{{ $event->description }}.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{ route('events.show', ['event' => $event->id]) }}" class="btn btn-sm btn-outline-secondary">View</a>
                      <a href="{{ route('events.edit', ['event' => $event->id]) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                    </div>
                    <small class="text-muted"> {{ (new \DateTime($event->updated_at))->format('d/m/Y H:i:s') }}</small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
            {{-- Paginator --}}
          {{ $events->links('vendor/pagination.bootstrap-4') }}
        </div>
     

@stop