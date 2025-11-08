@extends('layouts.layout2')

@section('title', 'Blog Home')

@section('content')
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda Universitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Gaya Kustom untuk Gambar Header */
        .header-image {
            background: url('https://via.placeholder.com/1200x300?text=Universitas+Bumigora+Header') no-repeat center center;
            background-size: cover;
            height: 300px; /* Tinggi header */
            position: relative;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        /* Gaya Kustom untuk Gambar-gambar Universitas */
        .content-image-custom {
            width: 100%;
            height: 250px; /* Tinggi seragam untuk semua gambar universitas */
            object-fit: cover; /* Memastikan gambar menutupi area tanpa terdistorsi */
            display: block;
        }

        /* Gaya Kustom untuk Footer */
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
                        <a class="nav-link text-decoration-none text-dark" href="#">22301040032 Baiq alia zulfianti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="header-image mb-5">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.4);"></div>
        
        <div class="container" style="z-index: 1;">
            <h1 class="display-5 fw-bold text-white">UNIVERSITAS BUMIGORA</h1>
            <p class="lead text-white">
                Terkenal dalam jurusan Komputernya yang tiada duanya, kini merambah kejuruasan komputer di daerah NTB 🏆
            </p>
            <a href="#" class="btn btn-sm btn-outline-light mt-2">Read More...</a>
        </div>
    </div>
    
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="text-center mb-5">
                    <img src="https://via.placeholder.com/1000x250?text=Gedung+Rektorat+Universitas+Mataram" class="content-image-custom mb-3" alt="Universitas Mataram">
                    <h4 class="fw-bold">Universitas Mataram</h4>
                    <p>Unram saat ini menjadi salah satu perguruan tinggi negeri unggul dengan penjaminan kualitas penyelenggaraan pendidikan yang signifikan. 🔥</p>
                    <a href="#" class="btn btn-sm btn-link text-decoration-none">Read More...</a>
                </div>

                <div class="text-center mb-5">
                    <img src="https://via.placeholder.com/1000x250?text=UNIVERSITAS+ISLAM+NEGERI+MATARAM" class="content-image-custom mb-3" alt="UIN Mataram">
                    <h4 class="fw-bold">UIN (State Islamic University of Mataram)</h4>
                    <p>perguruan tinggi Islam negeri di Indonesia yang menyelenggarakan pendidikan akademik pada berbagai disiplin ilmu pengetahuan, termasuk ilmu pengetahuan di luar studi keislaman.</p>
                    <a href="#" class="btn btn-sm btn-link text-decoration-none">Read More...</a>
                </div>

                <div class="text-center mb-5">
                    <img src="https://via.placeholder.com/1000x250?text=Universitas+Pendidikan+Mandalika" class="content-image-custom mb-3" alt="Undikma">
                    <h4 class="fw-bold">Undikma (Universitas Pendidikan Mandalika)</h4>
                    <p>Pada tanggal 2 Agustus 2019 Institut Keguruan dan Ilmu Pendidikan (IKIP) Mataram bergabung dengan Universitas Nusa Tenggara Barat (UNTB) dengan nama Universitas Pendidikan Mandalika.</p>
                    <a href="#" class="btn btn-sm btn-link text-decoration-none">Read More...</a>
                </div>
                
                <div class="text-center mb-5">
                    <img src="https://via.placeholder.com/1000x250?text=UNIVERSITAS+NAHDLATUL+WATHAN+MATARAM" class="content-image-custom mb-3" alt="Unwaha">
                    <h4 class="fw-bold">Universitas Nahdlatul Wathan Mataram</h4>
                    <p>sebuah perguruan tinggi swasta yang terletak di Kota Mataram, Nusa Tenggara Barat. Universitas ini berada di bawah organisasi kemasyarakatan terbesar di NTB, Nahdlatul Wathan.</p>
                    <a href="#" class="btn btn-sm btn-link text-decoration-none">Read More...</a>
                </div>
                
                 <div class="text-center mb-5">
                    <img src="https://via.placeholder.com/1000x250?text=Universitas+Islam+Al-Azhar" class="content-image-custom mb-3" alt="Unizar">
                    <h4 class="fw-bold">Unizar (Universitas Islam Al-Azhar)</h4>
                    <p>Unizar merupakan salah satu perguruan tinggi islam swasta di Nusa Tenggara Barat. Universitas ini memiliki kampus utama yang terletak di kawasan Turida dan sekitarnya. Unizar juga menjadi universitas yang melahirkan para pemimpin dan pejuang pada Kemerdekaan Republik dan UUD 1945.</p>
                    <a href="#" class="btn btn-sm btn-link text-decoration-none">Read More...</a>
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
                
                <div class="col-md-6 text-end small">
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
</html>
@endsection 