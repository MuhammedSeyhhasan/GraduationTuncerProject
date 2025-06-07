
@extends('layout')
@section('about')
 
  <!-- Page Banner Section -->
<section class="page-banner">
  <div class="container text-white">
    <h1 class="mb-2">Ürünlerimiz</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item text-white">
          <a href="{{ route('home.index') }}" class="text-white text-decoration-none">Tuncer Oğlu</a>
        </li>
        <li class="breadcrumb-item active text-warning" aria-current="page">Ürünlerimiz</li>
      </ol>
    </nav>
  </div>
</section>

      <div class="container mt-5">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li> {!! \Session::get('success')!!} </li>
                </ul>
            </div>
                
        @endif
    </div>

<div class="container">
    <h1 class="text-center mt-5"></h1>
        <div class="row g-4">
            @foreach ($products as $uruns)
                  <div class="col-md-4 col-lg-3 col-sm-6">
                      <div class="card mb-4 product-card shadow-sm border-0 h-100 transition" style="border-radius: 12px; overflow: hidden;">
                          <div class="product-details position-relative"
                              data-bs-toggle="modal"
                              data-bs-target="#productModal"
                              data-title="{{ $uruns->proname }}"
                              data-description="{{ $uruns->prodescription }}"
                              data-image="{{ asset('uploads/' . $uruns->proimage) }}"
                              style="cursor: pointer;">
                              
                              <img src="{{ asset('uploads/' . $uruns->proimage) }}" 
                                  class="card-img-top img-fluid" 
                                  alt="{{ $uruns->proname }}"
                                  style="height: 200px; object-fit: cover; transition: transform 0.3s;">
                          </div>
                          <div class="card-body d-flex flex-column p-3">
                              <h5 class="card-title mb-2 text-center">{{ $uruns->proname }}</h5>
                              <!-- buttuns -->
                              <div class="mt-auto d-grid gap-2">
                                  <a href="{{ route('single.product', $uruns->id) }}"
                                    class="btn btn-outline-primary btn-sm rounded-pill">
                                    Detayları Görüntüle
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
            @endforeach
      </div>
    
    <!-- التنقل بين الصفحات -->
    <section class="bg-white py-4">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="BSB Pagination 1 Example">
              <ul class="pagination bsb-pagination-1 pagination-lg justify-content-center">
    
                @if ($products->onFirstPage())
                  <li class="page-item disabled"><span class="page-link">Önceki</span></li>
                @else
                  <li class="page-item">
                    <a class="page-link" href="{{ $products->previousPageUrl() }}">Önceki</a>
                  </li>
                @endif
    
                @for ($page = 1; $page <= $products->lastPage(); $page++)
                  <li class="page-item {{ $page == $products->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $products->url($page) }}">{{ $page }}</a>
                  </li>
                @endfor
    
                @if ($products->hasMorePages())
                  <li class="page-item">
                    <a class="page-link" href="{{ $products->nextPageUrl() }}">Sonraki</a>
                  </li>
                @else
                  <li class="page-item disabled"><span class="page-link">Sonraki</span></li>
                @endif
    
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
    
    <!-- نافذة عرض تفاصيل المنتج (Modal) -->
      <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Product Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="productImage" src="" alt="Product Image" class="img-fluid mb-3 zoom-image" style="max-width: 30%; height: auto;">
                    
                    <h4 id="productName" class="mb-3"></h4>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
      </div>
</div>
          <!-- TEKLIF FORMU -->
<section class="py-5 bg-white shadow-lg rounded-4 mx-3 my-5" id="teklif-form">
  <div class="container">
    <h3 class="text-center mb-4 text-dark">TEKLIF FORMU</h3>
    <form action="{{ route('teklif.store') }}" method="POST" class="p-3">
      @csrf
      <div class="row g-3">
        <div class="col-md-6">
          <input type="text" name="name" class="form-control form-control-lg" placeholder="Adı Soyadı" required>
        </div>
        <div class="col-md-6">
          <input type="email" name="email" class="form-control form-control-lg" placeholder="E-posta" required>
        </div>
        <div class="col-md-6">
          <input type="text" name="phone" class="form-control form-control-lg" placeholder="Telefon">
        </div>
        <div class="col-md-6">
          <input type="text" name="product" class="form-control form-control-lg" placeholder="Ürün (Opsiyonel)">
        </div>
        <div class="col-12">
          <textarea name="message" rows="4" class="form-control form-control-lg" placeholder="Mesajınız..."></textarea>
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-warning btn-lg px-5 mt-3">Teklif Al</button>
        </div>
      </div>
    </form>
  </div>
</section>


<script>
  function scrollToForm() {
    document.getElementById('teklif-form').scrollIntoView({ behavior: 'smooth' });
  }
</script>

<script>
    function fillProductAndScroll(productName) {
        // عبي اسم المنتج بالحقل
        const productInput = document.querySelector('#teklif-form input[name="product"]');
        productInput.value = productName;
    
        // تمرق للسكشن
        document.getElementById('teklif-form').scrollIntoView({ behavior: 'smooth' });
    }
</script>
    
<script>
  function addHoverEffect(card) {
      card.classList.add("border-primary", "shadow-lg");
  }

  function removeHoverEffect(card) {
      card.classList.remove("border-primary", "shadow-lg");
  }

  // تحديث محتوى النافذة عند الفتح
  var productModal = document.getElementById('productModal');
  productModal.addEventListener('show.bs.modal', function (event) {
      var button = event.relatedTarget;
      var title = button.getAttribute('data-title');
      var image = button.getAttribute('data-image');

      var modalTitle = productModal.querySelector('.modal-title');
      var modalImage = productModal.querySelector('#productImage');
      var productName = productModal.querySelector('#productName');

      modalTitle.textContent = title;
      productName.textContent = title; // وضع العنوان أسفل الصورة أيضًا (اختياري)
      modalImage.src = image;
  });
</script>


<style>
    .product-card {
        transition: box-shadow 0.3s ease, border 0.3s ease;
    }

    
    .product-card:hover {
        border: 1px solid blue;
        
    }

    .image-container {
        overflow: hidden;
        width: 100%;
        height: auto;
        position: relative;
    }

    .zoom-image {
        transition: transform 0.3s ease;
        width: 100%;
        height: auto;
    }

    .zoom-image:hover {
        transform: scale(1.5); 
        cursor: zoom-in; 
    }
</style>


<style>
  .teklif-btn {
      background-color: rgba(139, 146, 158, 0.1); /* زر شفاف بلون أزرق خفيف */
      color: #a8962f;
      border: 1px solid #000000;
      border-radius: 30px;
      padding: 8px 20px;
      backdrop-filter: blur(4px); /* تأثير زجاجي */
      transition: all 0.3s ease;
      font-weight: 500;
  }
  
  .teklif-btn:hover {
      background-color: #0d6efd;
      color: white;
      transform: scale(1.05);
      box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
  }

  .page-banner {
      background-image: url('/img/forpage1.jpg'); 
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
</style>

  
  
@endsection