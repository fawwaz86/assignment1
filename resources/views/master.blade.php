<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Personal Profile')</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-image: url('{{ asset('images/grass.jpg') }}'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            min-height: 100vh; 
            display: flex; 
            flex-direction: column;">

  <nav class="navbar navbar-expand-lg navbar-light bg-success mb-4 fs-5">
    <div class="container">
      <a>Profile</a>

      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
          <li>
            <div class="dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About Me
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route(name: 'about') }}">syahmi</a></li>
                <li><a class="dropdown-item" href="{{ route(name: 'fawwaz') }}">fawwaz</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container flex-grow-1">
    @yield('content')
  </main>

  <footer class="bg-light text-center pt-3 pb-3 mt-auto">
    <div class="container">
      <footer>&copy; {{ date('Y') }} Your Name — Personal Profile</footer>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
