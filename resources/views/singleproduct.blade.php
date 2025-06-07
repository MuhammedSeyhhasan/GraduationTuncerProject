@extends('layout')
@section('about')


    <section class="page-banner">
        <div class="container text-white">
        <h1 class="mb-2">Ürün Detayalrı</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item text-white">
                <a href="{{ route('home.index') }}" class="text-white text-decoration-none">Tuncer Oğlu</a>
                <a href="{{ route('user.urunlerimiz') }}" class="text-white text-decoration-none">Ürünlerimiz
                </a>
            </li>
            <li class="breadcrumb-item active text-warning" aria-current="page">Ürün Detayalrı</li>
            </ol>
        </nav>
        </div>
    </section>
    

    <div class="product-detail py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- product image -->
                <div class="col-lg-6">
                    <div class="slider-zoom text-center mb-4 mb-lg-0">
                        <a 
                        class="cloud-zoom" 
                        rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', 
                        useWrapper: false, 
                        showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10" 
                        id="cloudZoom">
                            <img alt="Detail Zoom thumbs image" 
                                src="{{ asset('uploads/'.$product->proimage) }}" 
                                style="max-width: 80%; height: auto; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        </a>
                    </div>
                </div>
                <!-- product details -->
                <div class="col-lg-6">
                    <h2 class="mb-3">{{ $product->proname }}</h2>

                    <p class="text-muted mb-4">
                        <strong>Overview</strong><br>
                        {{ $product->prodescription }}
                    </p>

                    <p class="mb-2">
                        <strong>Quality:</strong> High Quality Wood & Craftsmanship
                    </p>
                    <!-- Form -->
                    <form action="#" method="POST">
                        @csrf
                        <div class="row g-3 align-items-center mb-4">
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-dark w-100">
                                    <i class="fas bi-heart-fill me-2"></i>Add to Favorite
                                </button>
                            </div>
                        </div>
                        <!-- Inputs Hidden -->
                        <input name="name" value="{{ $product->proname }}" type="hidden">
                        <input name="pro_id" value="{{ $product->proid }}" type="hidden">
                        <input name="image" value="{{ $product->proimage }}" type="hidden">
                    </form>
                    <!-- Tags -->
                    <div class="d-flex gap-2 flex-wrap">
                        <span class="badge bg-light text-dark">Wooden</span>
                        <span class="badge bg-light text-dark">Handmade</span>
                        <span class="badge bg-light text-dark">Export Quality</span>
                    </div>
                </div>
            </div>
       </div>
    </div>

@endsection 


<style>
    .page-banner {
        background-image: url('/img/detailes.jpeg'); 
        background-size: cover;
        background-position: center;
        position: relative;
        padding: 80px 0;
        color: white;
        }

        .page-banner::after {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.4); 
            z-index: 0;
        }

        .page-banner .container {
            position: relative;
            z-index: 1;
        }

        .page-banner h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .product-detail {
        background-color: #f9f9f9;
    }

    .slider-zoom img {
        transition: transform 0.3s ease;
    }

    .slider-zoom img:hover {
        transform: scale(1.05);
    }

    .btn-dark {
        background-color: #111;
        border: none;
        padding: 10px 20px;
        font-weight: bold;
    }
</style>

