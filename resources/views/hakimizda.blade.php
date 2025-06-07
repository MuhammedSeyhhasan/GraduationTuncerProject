@extends('layout')
@section('about')



  <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="container text-white">
        <h1 class="mb-2">HAKKIMIZDA</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item text-white">
                <a href="{{ route('home.index') }}" class="text-white text-decoration-none">Tuncer Oğlu</a>
            </li>
            <li class="breadcrumb-item active text-warning" aria-current="page">HAKKIMIZDA</li>
            </ol>
        </nav>
        </div>
    </section>

<div class="container py-5">
    <div class="text-sm text-gray">
        <ul class="list-unstyled">
            <li>
                <h3 class="h2 mb-4 text-center">
                    HAKKIMIZDA BİLGİLER
                </h3>
                <p class="lead text-center">
                    Biz, palet üretim sektöründe uzun yıllardır faaliyet gösteren bir fabrikayız. Müşterilerimize en kaliteli ve güvenilir palet çözümlerini sunmaktan gurur duyuyoruz. Amacımız, işletmenizin lojistik ihtiyaçlarını en iyi şekilde karşılamak için özel tasarım paletler üretmek ve en iyi hizmeti sunmaktır.
                </p> 

                 <h4 class="mb-4 text-center">Biz Kimiz</h4>
                <p class="lead text-center">
                TUNCER OĞLU PALET, tüm tür ve boyutlardaki paletlerin üretim ve tedarikinde uzmanlaşmış bir şirkettir. Bu sektördeki geniş deneyimimiz, yüksek kaliteli ve güvenilir ürünler sunmamıza olanak tanır. Paletlerin lojistik süreçlerdeki önemini biliyor ve müşterilerimize en iyi çözümleri sunmayı amaçlıyoruz.
                </p>
                <h4 class="mb-4 text-center">Misyonumuz</h4>
                <p class="lead text-center">
                TUNCER OĞLU PALET olarak misyonumuz, müşterilerimizin ihtiyaçlarını karşılayan, özel tasarım paletler üreterek işlerini geliştirmelerine yardımcı olmaktır. Müşterilerimizin iş süreçlerinin etkinliğini artıran, inovasyon ve kalite odaklı ürünler sunmayı taahhüt ediyoruz.
                </p>
                <h4 class="mb-4 text-center">Değerlerimiz</h4>
                <ul class="text-left">
                    <li> <h5 class="text-warning"  >Kalite</h5>Her zaman endüstri standartlarını karşılayan ve müşteri beklentilerini aşan yüksek kaliteli ürünler sunmayı hedefliyoruz. </li>
                    <li> <h5 class="text-warning" >Profesyonellik</h5>Müşterilerimiz ve iş ortaklarımızla yüksek profesyonellikle iletişim kuruyor, en yüksek hizmet seviyelerini sağlamak için çaba harcıyoruz.</li>
                    <li> <h5 class="text-warning" >İnovasyon</h5>Ürünlerimizi ve hizmetlerimizi geliştirmek ve müşteri taleplerini karşılamak için sürekli olarak yeni yollar arıyoruz. </li>
                    <li> <h5 class="text-warning" >İşbirliği</h5>Başarının işbirliği ile elde edileceğine inanıyor ve müşterilerimiz ve iş ortaklarımızla işbirliği yapmayı önemsiyoruz. </li>
                </ul>
            </li>

            <li>
            <div class="text-center col col-sm">
                     <video width="640" height="360" controls>
                  <source src="img/PALETV.mp4" type="video/mp4">
                    </video>
            </div>
            </li>
        </ul>
    </div>
</div>
@endsection

<style>
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