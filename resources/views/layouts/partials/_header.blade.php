  <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Eventbrote</h4>
              <p class="text-muted">Outils de création | réservation d'évènements.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white "><a href="{{ route('contact') }}" class="contact">Contact</a></h4><br>
              <ul class="list-unstyled">
                <li>
                  <p class="navbar-btn">
                  <a href="{{ route('events.create') }}" class="btn btn-primary" class="text-white"><i class="fa fa-plus"></i> Créer un évènement</a>          
                  </p>
                </li>
                <li>
                  <p class="navbar-btn">
                    <a href="{{ route('events.index') }}" class="btn btn-secondary my-2"><i class="fas fa-eye"></i> Voir la liste des évènements en cours</a>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Eventbrote</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>