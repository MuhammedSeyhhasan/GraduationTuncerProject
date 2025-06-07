<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="{{ asset('public/css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <title>TUNCER OGUL PALET</title>



</head>
<body>
     
<!-- ========== Navbar ========== -->
<nav class="navbar navbar-expand-lg transparent-navbar fixed-top">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand fw-bold" href="{{ route('home.index') }}">TUNCER OĞLU<span class="text-warning"> PALET</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
        aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse justify-content-end" id="navbarMain">
        <ul class="navbar-nav mb-2 mb-lg-0 gap-3">
          <li class="nav-item"><a class="nav-link active" href="{{ route('home.index') }}">ANASAYFA</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('user.urunlerimiz') }}">ÜRÜNLERİMİZ</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('home.hakimizda') }}">HAKKIMIZDA</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('home.iletisim') }}">İLETİŞİM</a></li>
        </ul>
        <a href="{{ route('admin.login') }}" class="btn btn-black btn-sm ms-lg-3 mt-2 mt-lg-0">Admin Giriş</a>
      </div>
    </div>
  </nav>
  



  <!-- ========== Hero Section ========== -->
  <section class="hero d-flex align-items-center">
    <div class="content">
      <h1>Hoş Geldiniz!</h1>
      <p>Tuncer Oğlu olarak sizlere en kaliteli ürünleri sunuyoruz.</p>
    </div>
  </section>
  



  <!-- ========== JS for Scroll Effect ========== -->
  <script>
    window.addEventListener('scroll', function () {
      const navbar = document.querySelector('.transparent-navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  </script>
  

@yield('about')
 
  

<!--- palet --->
<section id="PALET" class="bg-light text-dark py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2> <span class="text-warning">TUNCER OĞLU</span>'na Hoş Geldiniz</h2>
                <p class="lead">TUNCER OĞLU palet üretim ve tedarik şirketidir. 
                    Yıllar süren tecrübesi ve uzman ekibi ile, 
                    işletmenizin lojistik ihtiyaçlarına uygun yüksek kaliteli paletler sunuyoruz, 
                    Tuncer Oğlu Palet ile işlerinizde taşımanın gücünü keşfedin

                </p>
                <p>SUNULAN HIZMETLERIMIZ:</p>
                <ul>
                    <li>Yüksek Kaliteli Palet Üretimi: Müşterilerimizin ihtiyaçlarına uygun farklı boyutlarda, tiplerde ve taşıma kapasitelerinde özel paletler üretiyoruz. Güvenilir ve dayanıklı malzemeler kullanarak, tüm paletlerimiz uzun ömürlü ve güvenli taşıma için optimize edilmiştir.</li>
                    <li>İkinci kaliteli paletler: Tuncer Oğlu Palet olarak, uzun yıllara dayanan deneyimimizle ikinci kaliteli paletler üretiyoruz İkinci kaliteli paletler, ekonomik ve sürdürülebilir bir lojistik çözüm arayan işletmeler için mükemmel bir seçenektir.</li>
                    <li>Hızlı ve Güvenilir Teslimat: Müşteri memnuniyeti ve zamanında teslimat önceliklerimizdendir. Esnek ve etkili tedarik zincirimiz sayesinde, paletleriniz zamanında ve sorunsuz bir şekilde size ulaşır.</li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/new1.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/new22.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/new2.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/new4.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/new5.jpg" alt="Image">
                        </div>
                        <!-- Add more slides for additional images -->
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="counter-section text-white py-5" style="background: url('img/background.jpg') no-repeat center center/cover;">
    <div class="overlay" style="background-color: rgba(0,0,0,0.6); padding: 60px 0;">
      <div class="container text-center">
        <h2 class="mb-5">Garantili ve kaliteli ahşap palet hizmetleri sunuyoruz</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="counter-box mb-4 p-4 rounded shadow" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(5px);">
              <h3 class="counter display-4 fw-bold" data-target="450000">0</h3>
              <p class="mt-2">Palet/Yıl Üretim Kapasitesi</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="counter-box mb-4 p-4 rounded shadow" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(5px);">
              <h3 class="counter display-4 fw-bold" data-target="4500">0</h3>
              <p class="mt-2">Üretim Alanı</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="counter-box mb-4 p-4 rounded shadow" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(5px);">
              <h3 class="counter display-4 fw-bold" data-target="100000">0</h3>
              <p class="mt-2">Müşteri Memnuniyeti</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  
  
<section class="py-5 bg-light" id="services">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Image -->
        <div class="col-md-4 mb-4 mb-md-0 text-center">
          <img src="https://www.spilormanurunleri.com/wp-content/uploads/2024/02/serbis.png" alt="service" class="img-fluid rounded shadow">
        </div>
  
        <!-- Right Content -->
        <div class="col-md-8">
          <div class="text-center mb-4">
            <span class="text-muted d-block">Sizin İçin Yapıyoruz</span>
            <h2 class="fw-bold">Değerlerimiz</h2>
          </div>
  
          <div class="row text-center">
            <div class="col-sm-4 mb-4">
              <img src="https://www.spilormanurunleri.com/wp-content/uploads/2024/02/badge.png" alt="Kalite" class="mb-2" width="50">
              <h5>Kalite</h5>
            </div>
            <div class="col-sm-4 mb-4">
              <img src="https://www.spilormanurunleri.com/wp-content/uploads/2024/02/wallet.png" alt="Ekonomik Fiyat" class="mb-2" width="50">
              <h5>Ekonomik Fiyat</h5>
            </div>
            <div class="col-sm-4 mb-4">
              <img src="https://www.spilormanurunleri.com/wp-content/uploads/2024/02/satisfaction.png" alt="Müşteri Memnuniyeti" class="mb-2" width="50">
              <h5>Müşteri Memnuniyeti</h5>
            </div>
            <div class="col-sm-4 mb-4">
              <img src="https://www.spilormanurunleri.com/wp-content/uploads/2024/02/lightbulb.png" alt="Yenilikçi" class="mb-2" width="50">
              <h5>Yenilikçi</h5>
            </div>
            <div class="col-sm-4 mb-4">
              <img src="https://www.spilormanurunleri.com/wp-content/uploads/2024/02/clock.png" alt="Zamanında Teslimat" class="mb-2" width="50">
              <h5>Zamanında Teslimat</h5>
            </div>
            <div class="col-sm-4 mb-4">
              <img src="https://www.spilormanurunleri.com/wp-content/uploads/2024/02/system.png" alt="İş Birliği" class="mb-2" width="50">
              <h5>İş Birliği</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  

<!-- chat bot sec  -->
<button class="chatbot-button btn btn-warning rounded-circle shadow-lg position-fixed" 
        style="bottom: 65px; right: 10px; width: 60px; height: 60px;" 
        onclick="toggleChat()">
    💬
</button>

<!-- chat Box -->
<div class="chat-container card position-fixed shadow-lg" id="chat-container"
     style="bottom: 130px; right: 20px; width: 350px; display: none;">
    <div class="card-header bg-dark text-white text-center">
        🤖Tuncer Chatbot
        <button class="btn-close btn-close-white float-end" onclick="toggleChat()"></button>
    </div>
    <div id="chat-box" class="card-body overflow-auto" style="height: 300px;"></div>
    <div class="card-footer d-flex">
        <input type="text" id="user-input" class="form-control me-2" placeholder="Mesaj Yazınız...">
        <button class="btn btn-warning" onclick="sendMessage()">Gönder</button>
    </div>
</div>


<!-- chat -->
<script>
function toggleChat() {
    let chatBox = document.getElementById('chat-container');
    chatBox.style.display = (chatBox.style.display === 'none' || chatBox.style.display === '') ? 'flex' : 'none';
}

function sendMessage() {
    var userMessage = document.getElementById("user-input").value;

    if (userMessage) {
        document.getElementById("chat-box").innerHTML += "<div><b>You:</b> " + userMessage + "</div>";
        document.getElementById("user-input").value = "";

        fetch("/send-to-bot", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            },
            body: JSON.stringify({ message: userMessage })
        })
        .then(response => response.json())
        .then(data => {
            if (data.response) {
                document.getElementById("chat-box").innerHTML += "<div><b>Bot:</b> " + data.response + "</div>";
            } else {
                document.getElementById("chat-box").innerHTML += "<div class='text-danger'><b>❌ " + data.error + "</b></div>";
            }
            document.getElementById("chat-box").scrollTop = document.getElementById("chat-box").scrollHeight;
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById("chat-box").innerHTML += "<div class='text-danger'><b>❌ Bir hata oluştu </b></div>";
        });
    }
}
</script>


<!-- Footer -->
<footer class="bg-dark text-light pt-5 pb-3">
        <div class="container">
        <div class="row gy-4">
            
            <div class="col-lg-3 col-md-6">
            <h5 class="text-warning fw-bold mb-3">HAKKIMIZDA</h5>
            <p class="small">
                Tuncer Oğlu Palet olarak, lojistik ihtiyaçlarınıza yönelik çözümler sunuyoruz. Kaliteli üretim anlayışımızla sektörde öncüyüz.
            </p>
            </div>
            
            <div class="col-lg-3 col-md-6">
            <h5 class="text-warning fw-bold mb-3">MENÜ</h5>
            <ul class="list-unstyled">
                <li><a href="{{ route('home.index') }}" class="text-light text-decoration-none">ANASAYFA</a></li>
                <li><a href="{{ route('user.urunlerimiz') }}" class="text-light text-decoration-none">ÜRÜNLERİMİZ</a></li>
                <li><a href="{{ route('home.hakimizda') }}" class="text-light text-decoration-none">HAKKIMIZDA</a></li>
                <li><a href="{{ route('home.iletisim') }}" class="text-light text-decoration-none">İLETİŞİM</a></li>
            </ul>
            <div class="mt-3">
                <a href="#" class="text-light me-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-light me-2"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/muhammedseyhhasan" class="text-light"><i class="fab fa-instagram"></i></a>
            </div>
            </div>
    
            <div class="col-lg-3 col-md-6">
            <h5 class="text-warning fw-bold mb-3">İLETİŞİM</h5>
            <p class="small mb-1"><i class="bi bi-geo-alt-fill me-2 text-warning"></i>Atatürk MH. Özdemir CD. 224 SK. NO:8 MANISA/TURGUTLU</p>
            <p class="small mb-1"><i class="bi bi-telephone-fill me-2 text-warning"></i>05 XXX XXX XXXX</p>
            <p class="small"><i class="bi bi-envelope-fill me-2 text-warning"></i>tunceroglupalet@gmail.com</p>
            </div>
    
            <div class="col-lg-3 col-md-6">
            <h5 class="text-warning fw-bold mb-3">ÇALIŞMA SAATLERİ</h5>
            <ul class="list-unstyled small">
                <li>Pt - Cu: 8:00 - 18:00</li>
                <li>Ct: 8:00 - 14:00</li>
                <li>Pa: Kapalı</li>
            </ul>
            </div>
    
        </div>
    
        <hr class="bg-secondary mt-4">
    
        <div class="text-center small">
            &copy; {{ date('Y') }} TUNCER OĞLU PALET. Developed by 
            <a class="text-warning text-decoration-none" href="tel:0095366038656">Muhammed Şeyhhasan</a>
            <a href="#" class="d-block mt-2"><i class="bi bi-arrow-up-circle-fill text-warning fs-5"></i></a>
        </div>
        </div>
</footer>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<script>
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
      counter.innerText = '0';
      const updateCounter = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const increment = target / 200;
  
        if (count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(updateCounter, 10);
        } else {
          counter.innerText = target.toLocaleString();
        }
      };
      updateCounter();
    });
</script>
  


<style>
        body {
          
            background-color: #f8f9fa;
            font-family: 'Tajawal', sans-serif;
        }

        /* أيقونة التشات بوت */
        .chatbot-button {
            position: fixed;
            bottom: 65px;
            right: 20px;
            background: #FFC107; /* أصفر ليناسب الموقع */
            color: black; /* أيقونة سوداء */
            border: none;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease-in-out;
        }

        .chatbot-button:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        /* صندوق الدردشة */
        .chat-container {
            position: fixed;
            bottom: 130px;
            right: 20px;
            width: 350px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            display: none;
            flex-direction: column;
            animation: fadeIn 0.3s ease-in-out;
        }

        .chat-header {
            background: #FFC107; 
             color: black; 
            padding: 12px;
            text-align: center;
            font-weight: bold;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chat-header button {
            background: transparent;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        .chat-box {
            height: 300px;
            overflow-y: auto;
            padding: 15px;
            display: flex;
            flex-direction: column;
            background-color: #f9f9f9;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .message {
            padding: 10px 15px;
            border-radius: 20px;
            margin: 5px 0;
            max-width: 75%;
            word-wrap: break-word;
            font-size: 14px;
            transition: all 0.3s ease-in-out;
        }

        .user-message {
            background-color: #FFC107; /* أصفر */
             color: black;
            align-self: flex-end;
            text-align: right;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .bot-message {
            background-color: #E9ECEF; /* رمادي فاتح */
            color: black;
            align-self: flex-start;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .chat-footer {
            display: flex;
            padding: 10px;
            background: #ffffff;
            border-top: 1px solid #ddd;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .chat-footer input {
            flex: 1;
            border-radius: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            outline: none;
            font-size: 14px;
            transition: all 0.3s ease-in-out;
        }

        .chat-footer input:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 8px rgba(106, 17, 203, 0.2);
        }

        .chat-footer button {
            background: #6a11cb;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            margin-left: 5px;
            transition: all 0.3s ease-in-out;
        }

        .chat-footer button:hover {
            background: #2575fc;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

              .counter-box h3 {
          font-size: 2.5rem;
          font-weight: bold;
          color: #ffc107;
        }
        
        .counter-box p {
          font-size: 1.2rem;
        }

</style>


<style>
      
  a {
      text-decoration: none; 
  }
  a:active {
      color:grey ;
  }

</style>

<style>
  /* Transparent Navbar */
  .transparent-navbar {
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1030;
  background-color: transparent;
  transition: background-color 0.4s ease, box-shadow 0.4s ease;
  }

  .transparent-navbar .navbar-brand,
  .transparent-navbar .nav-link,
  .transparent-navbar .btn-black {
  color: white !important;
  }

  .transparent-navbar .nav-link:hover,
  .transparent-navbar .nav-link.active {
  color: #ffc107 !important;
  }

  .transparent-navbar.scrolled {
  background-color: rgba(0, 0, 0, 0.85);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
  }

  .transparent-navbar.scrolled .navbar-brand,
  .transparent-navbar.scrolled .nav-link,
  .transparent-navbar.scrolled .btn-black {
  color: white !important;
  }

  .btn-black {
  background-color: transparent;
  border: 1px solid white;
  color: white;
  padding: 0.4rem 1rem;
  font-weight: 500;
  border-radius: 25px;
  transition: all 0.3s ease;
  }

  .btn-black:hover {
  background-color: white;
  color: black !important;
  border-color: white;
  }

  /* Hero Section */
  .hero {
  background-image: url('/img/hero.jpeg'); /* استبدل بالمسار الصحيح للصورة */
  background-size: cover;
  background-position: center;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: white;
  position: relative;
  }

  .hero::after {
  content: '';
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background-color: rgba(0, 0, 0, 0.4); /* تعتيم خفيف على الصورة */
  z-index: 0;
  }

  .hero .content {
  position: relative;
  z-index: 1;
  max-width: 800px;
  padding: 0 15px;
  }

  .hero h1 {
  font-size: 3.5rem;
  font-weight: 700;
  margin-bottom: 1rem;
  text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.6);
  }

  .hero p {
  font-size: 1.2rem;
  text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.6);
  }
</style>