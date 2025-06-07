@extends('layout')
@section('about')

<!-- Page Banner Section -->
<section class="page-banner">
    <div class="container text-white">
        <h1 class="mb-2">İletişim</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item text-white">
                <a href="{{ route('home.index') }}" class="text-white text-decoration-none">Tuncer Oğlu</a>
            </li>
            <li class="breadcrumb-item active text-warning" aria-current="page">İletişim</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      
      <!-- Left Side: Contact Info -->
      <div class="col-md-6">
        <h2 class="mb-4">İletişim Bilgileri</h2>

        <!-- Address Card -->
        <div class="card border-0 shadow-sm mb-3">
          <div class="card-body p-4 d-flex align-items-start">
            <span class="bg-light rounded-circle me-3 p-2">
              <i class="bi bi-geo-alt-fill fs-4"></i>
            </span>
            <div>
              <p class="mb-0 fw-bold">Tuncer Oğlu Palet</p>
              <p class="mb-0">Atatürk MH. Özdemir CD. 224 SK. NO:8</p>
              <p class="mb-0">Manisa/Turgutlu</p>
            </div>
          </div>
        </div>

        <!-- Email Card -->
        <div class="card border-0 shadow-sm mb-3">
          <div class="card-body p-4 d-flex align-items-start">
            <span class="bg-light rounded-circle me-3 p-2">
              <i class="bi bi-envelope-fill fs-4"></i>
            </span>
            <div>
              <p class="mb-0">info@tunceroglu.com.tr</p>
            </div>
          </div>
        </div>

        <!-- Phone Card -->
        <div class="card border-0 shadow-sm">
          <div class="card-body p-4 d-flex align-items-start">
            <span class="bg-light rounded-circle me-3 p-2">
              <i class="bi bi-telephone-fill fs-4"></i>
            </span>
            <div>
              <p class="mb-0">+90 (236) 123 45 67</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Side: Contact Form -->
      <div class="col-md-6">
        <div class="card bg-secondary text-white shadow-lg rounded-4">
          <div class="card-body p-4">
            <h4 class="text-center mb-4 fw-bold">Bize Ulaşın</h4>

            <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <!-- Name -->
              <div class="mb-3">
                <label for="name" class="form-label"><i class="bi bi-person-fill me-2"></i>İsim Soyisim*</label>
                <input type="text" id="name" name="name" class="form-control form-control-lg ps-5" placeholder="Adınızı ve soyadınızı girin" required>
              </div>

              <!-- Phone -->
              <div class="mb-3">
                <label for="phone" class="form-label"><i class="bi bi-telephone-fill me-2"></i>Telefon*</label>
                <input type="tel" id="phone" name="phone" class="form-control form-control-lg ps-5" placeholder="Telefon numaranızı girin" required>
              </div>

              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label"><i class="bi bi-envelope-fill me-2"></i>Email</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg ps-5" placeholder="E-posta adresinizi girin">
              </div>

              <!-- Message -->
              <div class="mb-3">
                <label for="message" class="form-label"><i class="bi bi-chat-dots-fill me-2"></i>Mesajınız</label>
                <textarea id="message" name="message" class="form-control ps-5" rows="5" placeholder="Mesajınızı buraya yazın..."></textarea>
              </div>

              <!-- Privacy Policy Checkbox -->
              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="privacy-policy" name="privacy_policy" required>
                <label class="form-check-label" for="privacy-policy">
                  <span class="text-black">KVKK metnini okudum ve onaylıyorum.</span> (KVKK)
                </label>
              </div>

              <!-- Submit Button -->
              <div class="d-grid">
                <button type="submit" class="btn btn-outline-light btn-lg rounded-pill">
                  <i class="bi bi-send me-2"></i>Gönder
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

   <!-- Google Maps -->
<div class="row mt-5">
    <div class="col">
        <h3 class="mb-4">Konum</h3>
        <div class="map-responsive">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3122.2452989424!2d27.69085368466115!3d38.50505317963314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b9a74478ab8285%3A0x14f7c0f28c52d031!2sTuncer%20O%C4%9Flu%20Palet!5e0!3m2!1sar!2str!4v1691672573425!5m2!1sar!2str"
                width="100%" height="450" style="border:0;" 
                allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>


  </div>
</section>

@endsection



<style>
    .page-banner {
    background-image: url('/img/El.jpg'); 
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

