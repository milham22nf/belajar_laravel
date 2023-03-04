<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Laravel | {{ $title }}</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css" >
    <link rel="stylesheet" href="../../fonts/bootstrap-icons.scss">
    {{-- my styke --}}
    <link rel="stylesheet" href="../../css/style.css">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="collapse navbar-collapse container">
      <ul class="navbar-nav  ">
        <li class="nav-item">
          <a class="nav-link">Belajar Laravel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "ome") ? 'active' : '' }}" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "blog") ? 'active' : '' }}" href="/blog">Blog</a>
        </li>
      </ul>
      <ul class="navbar">
        <li class="nav-item">
          <a href="/login" class="nav-link {{ ($title === "Login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
      </ul>
  </div>
</nav>
    <!-- akhir navbar -->
    <div class="container mt-4">
    @yield('container')     
    </div>

    <script src="../../js/bootstrap.bundle.min.js"></script>

  </body>
</html>