<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Güncelle</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="card-header bg-gradient text-white text-center py-4">
                        <i class="bi bi-pencil-square display-5 mb-2"></i>
                        <h4 class="mb-0 fw-bold">Ürün Bilgilerini Güncelle</h4>
                    </div>
    
                    <div class="card-body p-4">
                        <form action="{{ route('Uruns.update', $Uruns->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
    
                            <!-- Product Name -->
                            <div class="mb-4">
                                <label for="proname" class="form-label fw-semibold"><i class="bi bi-box me-1 text-primary"></i> Ürün Adı</label>
                                <input type="text" class="form-control form-control-lg rounded-pill ps-4" id="proname" name="proname"
                                       value="{{ old('proname', $Uruns->proname) }}" placeholder="Örn: Taşınabilir Hoparlör" required>
                            </div>
    
                            <!-- Product Description -->
                            <div class="mb-4">
                                <label for="prodescription" class="form-label fw-semibold"><i class="bi bi-card-text me-1 text-primary"></i> Ürün Açıklaması</label>
                                <textarea class="form-control rounded-3 ps-3" id="prodescription" name="prodescription" rows="5"
                                          placeholder="Ürün hakkında detaylı bilgi girin..." required>{{ old('prodescription', $Uruns->prodescription) }}</textarea>
                            </div>
    
                            <!-- Product Image -->
                            <div class="mb-4">
                                <label for="proimage" class="form-label fw-semibold"><i class="bi bi-image me-1 text-primary"></i> Ürün Görseli</label>
                                <input type="file" class="form-control rounded-pill" id="proimage" name="proimage" accept="image/*">
    
                                <div class="text-center mt-3">
                                    <img src="{{ asset('uploads/' . $Uruns->proimage) }}" alt="Mevcut Ürün Görseli"
                                         class="img-fluid rounded shadow-sm border" style="max-width: 200px;">
                                    <p class="text-muted small mt-2 mb-0">Mevcut görsel</p>
                                </div>
                            </div>
    
                            <!-- Submit Buttons -->
                            <div class="d-flex flex-column flex-sm-row gap-2 mt-4 pt-2">
                                <button type="submit" class="btn btn-lg btn-primary w-100 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-save me-2"></i> Değişiklikleri Kaydet
                                </button>
                                <a href="{{ route('admin.urunlerimiz') }}" class="btn btn-outline-secondary btn-lg w-100 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-left me-2"></i> İptal Et
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</body>
</html>




<style>
    .bg-gradient {
        background: linear-gradient(135deg, #f5af19, #fcb845);
    }

    .card {
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
    }
</style>