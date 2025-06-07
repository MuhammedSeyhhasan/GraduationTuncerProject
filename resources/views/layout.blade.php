<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('public/css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/paginations/pagination-1/assets/css/pagination-1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css ">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>TUNCER OGUL PALET</title>
    
    <style>
        a {
            text-decoration: none; 
        }
        a:active {
            color:grey ; 
        }
        
        html, body {
            height: 100%;
        }
        .content-wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        .main-content {
            flex: 1;
        }
    </style>

    <style>
        
        /* ========== Navbar Styles ========== */
        .navbar-brand {
            font-size: 1.6rem;
            font-weight: bold;
            color: #000000fb !important;
        }

        .navbar-brand .text-warning {
            color: #ffc107 !important; 
        }

        .navbar-nav .nav-link {
            color: rgb(6, 7, 6) !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #ffc107 !important;
        }

        .btn-black {
            background-color: rgb(0, 0, 0);
            color: #fff;
            border-radius: 25px;
            padding: 0.4rem 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-black:hover {
            background-color: rgba(190, 154, 140, 0);
            color: #ffc107;
        }
        .main-navbar {
        background-color: rgba(255, 255, 255, 0.85); 
        backdrop-filter: blur(10px); 
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 1rem 2rem;
        position: sticky;
        top: 0;
        z-index: 1000;
        }

        .custom-soft-btn {
        background-color: rgba(255, 255, 255, 0.1); 
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.4);
        backdrop-filter: blur(4px);
        border-radius: 25px;
        transition: all 0.3s ease;
        }

        .custom-soft-btn:hover {
        background-color: rgba(255, 255, 255, 0.3);
        color: black;
        border-color: white;
        }
    </style>

</head>
<body class="d-flex flex-column min-vh-100">
 <!-- ========== Navbar ========== -->
<nav class="navbar navbar-expand-lg main-navbar">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand fw-bold" href="{{ route('home.index') }}">
            TUNCER OĞLU<span class="text-warning"> PALET</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
            aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarMain">
            <ul class="navbar-nav mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('home.index') ? 'active' : '' }}" 
                       href="{{ route('home.index') }}">ANASAYFA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('user.urunlerimiz') ? 'active' : '' }}" 
                       href="{{ route('user.urunlerimiz') }}">ÜRÜNLERİMİZ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('home.hakimizda') ? 'active' : '' }}" 
                       href="{{ route('home.hakimizda') }}">HAKKIMIZDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('home.iletisim') ? 'active' : '' }}" 
                       href="{{ route('home.iletisim') }}">İLETİŞİM</a>
                </li>
            </ul>
        </div>
    </div>
</nav>





@yield('about')

 <!-- ========== Footer ========== -->
<footer class="bg-dark text-white mt-auto pt-4 pb-3 position-relative">
    <a href="#" class="position-absolute" style="right: 15px; bottom: 15px;">
      <i class="bi bi-arrow-up-circle-fill h3 text-warning"></i>
    </a>
    <div class="container pt-4">
      <div class="text-center">
            <p class="mb-1">
                 &copy; <?php echo date('Y'); ?> <strong>TUNCER OĞLU PALET</strong> - All Rights Reserved.
            </p>
            <p class="mb-0">
                Developed by 
                <a href="https://www.instagram.com/muhammedseyhhasan/" target="_blank" class="text-warning text-decoration-none">
                    <i class="bi bi-instagram"></i> Muhammed Şeyhhasan
                </a>
            </p>
      </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
