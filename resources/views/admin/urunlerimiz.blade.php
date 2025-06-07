@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-5 text-primary">Manage Products</h1>

    <div class="row">
        @foreach ($products as $uruns)
        <div class="col-md-4 col-lg-3 col-sm-6">
            <div class="card mb-4 shadow-sm border-0 product-card">
                <!-- تفاصيل المنتج -->
                <div class="product-details"
                    data-bs-toggle="modal"
                    data-bs-target="#productModal"
                    data-title="{{ $uruns->proname }}"
                    data-description="{{ $uruns->prodescription }}"
                    data-image="{{ asset('uploads/' . $uruns->proimage) }}"
                    style="cursor: pointer;">
                    <img src="{{ asset('uploads/' . $uruns->proimage) }}" class="card-img-top" alt="{{ $uruns->proname }}">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $uruns->proname }}</h5>
                        <p class="card-text text-muted">
                            {{ strlen($uruns->prodescription) > 50 ? substr($uruns->prodescription, 0, 40) . '...' : $uruns->prodescription }}
                        </p>
                    </div>
                </div>
                <!-- أزرار التعديل والحذف -->
                <div class="card-footer text-center bg-light">
                    <a href="{{ route('admin.uruns.edit', $uruns->id) }}" class="btn btn-outline-primary btn-sm me-2">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <form action="{{ route('Uruns.destroy', $uruns->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <!-- نافذة المنتج -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <img id="productImage" src="" alt="" class="img-fluid rounded shadow">
                    </div>
                    <p id="productDescription" class="text-muted"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // تحديث بيانات المودال
    var productModal = document.getElementById('productModal');
    productModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var title = button.getAttribute('data-title');
        var description = button.getAttribute('data-description');
        var image = button.getAttribute('data-image');
        
        var modalTitle = productModal.querySelector('.modal-title');
        var modalDescription = productModal.querySelector('#productDescription');
        var modalImage = productModal.querySelector('#productImage');
        
        modalTitle.textContent = title;
        modalDescription.textContent = description;
        modalImage.src = image;
    });
</script>

<style>
    .product-card {
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .card-footer {
        border-top: none;
    }

    /* نافذة المنتج */
    .modal-header {
        background-color: #f8f9fa;
    }

    .modal-body img {
        max-height: 300px;
        object-fit: contain;
    }

    .btn-outline-primary:hover, .btn-outline-danger:hover {
        color: #fff;
    }
</style>

@endsection
