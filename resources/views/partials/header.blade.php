<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route("home") }}">DC Comics</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route("home") }}">Home</a>
              </li>
              <li class="nav-item {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route("comics.index") }}">Comics</a>
              </li>           
              <li class="nav-item {{ Route::currentRouteName() == 'comics.create' ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route("comics.create") }}">Add new comic</a>
              </li>           
            </ul>
          </div>
        </div>
      </nav>
</header>