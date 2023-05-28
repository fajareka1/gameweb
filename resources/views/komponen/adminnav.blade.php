@php $path = Storage::url('imgs/'.'mainlogo.png'); @endphp


<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="me-3" href="#">
        <img src="{{ url($path) }}" alt="" srcset="" width="50px" height="50px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" href="/admin">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/userlist">Userlist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/gamelist">Gamelist</a>
          </li>
          
        </ul>

      </div>
      <div>
        <ul>
          <li class="nav-item"><a class="nav-link text-light" href="/sesi/logout">Sign out</a></li>
        </ul>
      </div>
    </div>
  </nav>