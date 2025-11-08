<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Custom Girly Style -->
    <style>
        body {
            background: linear-gradient(135deg, #ffafbd, #ffc3a0, #f9dcc4);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            padding-top: 20px;
            overflow-x: hidden;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.85) !important;
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(255, 105, 180, 0.4);
            margin-bottom: 30px;
        }

        .card {
            border-radius: 25px !important;
            box-shadow: 0 10px 30px rgba(255, 182, 193, 0.5) !important;
            border: none !important;
            background: rgba(255, 255, 255, 0.9) !important;
            overflow: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            color: #d63384;
            text-shadow: 2px 2px 4px rgba(255, 182, 193, 0.6);
        }

        .btn-girly {
            background: linear-gradient(to right, #ff6b9d, #ff8fab);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 25px;
            font-weight: bold;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn-girly:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(255, 105, 180, 0.7);
        }

        .footer-text {
            color: #d63384;
            font-weight: 600;
            margin-top: 40px;
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light mx-auto w-75">
        <div class="container">
            <a class="navbar-brand fw-bold text-pink" href="{{ url('/') }}">🌸 My Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link fw-bold" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center footer-text">
        <p>✨ Made with 💖 by Me | Class of 2023 ✨</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

</body>

</html>