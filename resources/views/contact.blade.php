@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 text-center" data-aos="fade-up">
            <div class="card p-5">
                <h2 class="mb-4">💌 Kontak Saya</h2>
                <p class="fs-5">Silakan hubungi saya melalui media sosial berikut:</p>

                <div class="mt-4">
                    <div class="mb-3">
                        <a href="https://instagram.com/your_ig" target="_blank" class="btn btn-girly d-inline-block">
                            <i class="fab fa-instagram me-2"></i> Instagram
                        </a>
                    </div>
                    <div>
                        <a href="mailto:aremayuda@gmail.com" class="btn btn-girly d-inline-block">
                            <i class="fas fa-envelope me-2"></i> Email
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-4" data-aos="fade-down">
            </div>
        </div>
    </div>

    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection