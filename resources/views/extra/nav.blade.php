<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Real project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/">Home Page</a>
        <a class="nav-link" href="{{ route('about') }}">About</a>
        <a class="nav-link" href="{{ route('contact') }}">contact</a>
        <a class="nav-link" href="{{ route('service') }}">service</a>
        <a class="nav-link" href="{{ route('donate') }}">Donate Me</a>
      </div>
    </div>
  </div>
</nav>
