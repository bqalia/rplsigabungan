@extends('layouts.layout2')

@section('title', 'About')

@section('content')
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">MyWebsite</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- About Section -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="About image">
        </div>
        <div class="col-md-6">
          <h2 class="fw-bold mb-3">About Us</h2>
          <p>
            Kami adalah tim pengembang yang berfokus pada pembuatan solusi digital kreatif.
            Dengan semangat inovasi, kami membantu bisnis tumbuh melalui teknologi modern.
          </p>
          <p>
            Visi kami adalah menjadi mitra digital terbaik yang menghadirkan pengalaman luar biasa bagi pengguna.
          </p>
          <a href="contact.html" class="btn btn-primary mt-3">Hubungi Kami</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; 2025 MyWebsite. All Rights Reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
    
    <a href="/home">← Back to Home</a>
@endsection