@extends('layouts.layout2')

@section('title', 'About')

@section('content')
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .card-profile {
            max-width: 450px;
        }
        .card-img-top-custom {
            width: 100%;
            height: 250px; 
            object-fit: cover; 
            border-top-left-radius: var(--bs-card-border-radius);
            border-top-right-radius: var(--bs-card-border-radius);
        }
        .footer-custom {
            background-color: #f8f9fa; 
            border-top: 1px solid #e9ecef; 
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <div class="container-fluid mx-5">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-decoration-none text-dark" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-decoration-none text-dark" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-decoration-none text-dark" href="#">2301040001 Baiq julia anggraini</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-decoration-none text-dark" href="#">2301040032 Baiq alia zulfianti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row justify-content-center g-4">
            
            <div class="col-lg-5 col-md-6 d-flex justify-content-center">
                <div class="card shadow-sm border-0 card-profile">
                    <img src="https://via.placeholder.com/450x250?tex" class="card-img-top-custom" alt="JulHadi">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Baiq julia anggraini</h5>
                        <p class="card-text">
                            begandang is in my blood cause all the projects wont solve itself 🧑‍💻
                            <br><br>
                            2301040001
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 d-flex justify-content-center">
                <div class="card shadow-sm border-0 card-profile">
                    <img src="https://https://www.quipper.com/id/blog/wp-content/uploads/2023/01/pexels-pixabay-36753.webp" class="card-img-top-custom" alt="iMAM RRR">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Baiq Alia zu</h5>
                        <p class="card-text">
                            professional front end designer
                            <br><br>
                           2301040032
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer-custom mt-auto py-3"> 
        <div class="container-fluid mx-5">
            <div class="row align-items-center">
                <div class="col-md-6 text-start">
                    <span class="text-muted">© 2025 Company, Inc</span>
                </div>
                
                <div class="col-md-6 text-end">
                    <a class="text-decoration-none text-dark me-2" href="#">Home</a>
                    <a class="text-decoration-none text-dark me-2" href="#">About</a>
                    <a class="text-decoration-none text-dark me-2" href="#">2301010019 Julhadi</a>
                    <a class="text-decoration-none text-dark me-2" href="#">feat</a>
                    <br>
                    <a class="text-decoration-none text-dark" href="#">2301010021 iMAM RRR</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
    
    <a href="/home">← Back to Home</a>
@endsection