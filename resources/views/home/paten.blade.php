<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>PATEN</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="css/home/min.css" rel="stylesheet">

    <link href="css/home/icons.css" rel="stylesheet">

    <link href="css/home/style.css" rel="stylesheet">

</head>

<body>

    <main>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/paten') }}">PATEN</a>
        
                <a href="{{ url('/login') }}" class="btn custom-btn d-lg-none ms-auto me-4">LOGIN HERE</a>
        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section2">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section3">Tentang</a>
                        </li>
                    </ul>
        
                   <!-- Tombol Profil dengan Dropdown -->
<div class="dropdown d-lg-block d-none">
    <a class="btn custom-btn dropdown-toggle" href="#" id="profileDropdown" role="button"
       data-bs-toggle="dropdown" aria-expanded="false">
       Profil
    </a>
    <ul class="dropdown-menu" aria-labelledby="profileDropdown">
        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Edit Profil</a></li>
        <li>
        <li><a class="dropdown-item" href="{{ route('history') }}">History Pengajuan</a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button class="dropdown-item" type="submit" onclick="event.preventDefault(); this.closest('form').submit();">
                    Keluar
                </button>
            </form>
        </li>
        
    </ul>
</div>
                </div>
            </div>
        </nav>
        


        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5 text-center">
                        <small>Layanan Masyarakat Ketapang</small>

                        <h1 class="text-white mb-5">PATEN KETAPANG</h1>

                        <a class="btn custom-btn smoothscroll" href="#section2">Layanan Tersedia</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="video/Y2meta.app-Video Sekilas Kota Ketapang Kalimantan Barat Edisi HUT ke 604 Kabupaten Ketapang Kalbar Tahun 2022.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
        </section>

        <section class="container-fluid feature bg-light py-5" id="section2">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp title-section" data-wow-delay="0.2s">
                    <h4 class="text-primary display-5">Pelayanan Kami</h4>
                    <p class="subtitle-text mt-2">kami memiliki 3 pelayanan.</p>
                </div>
                             
                <div class="row g-4 justify-content-center">

                    <div class="col-md-4 col-lg-3 wow fadeInUp mt-costum" data-wow-delay="0.4s" style="margin-top: 15px;">
                      
                        <div class="feature-item p-4 pt-0 text-center">
                           
                            <!-- Ikon dan teks konten -->
                            <h4 class="mb-4">Smart Village</h4>
                             <!-- Foto dengan rasio 4:3 dan lengkungan tumpul -->
                             <img src="data:image/jpeg;base64,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" alt="Ale-Ale Image" class="img-fluid mb-4 rounded-4-3" style="width: 100%; object-fit: cover; border-radius: 15px;">
                    
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('/smart') }}">Pelayanan tersedia</a>
                        </div>
                    </div>
                    

                    <div class="col-md-4 col-lg-3 wow fadeInUp mt-costum" data-wow-delay="0.4s" style="margin-top: 15px;">
                      
                        <div class="feature-item p-4 pt-0 text-center">
                           
                            <!-- Ikon dan teks konten -->
                            <h4 class="mb-4">Ale Ale</h4>
                             <!-- Foto dengan rasio 4:3 dan lengkungan tumpul -->
                             <img src="https://rakyatborneo.com/wp-content/uploads/2022/05/FOTO-KETAPANG-13-MEI-.jpg" alt="Ale-Ale Image" class="img-fluid mb-4 rounded-4-3" style="width: 100%; object-fit: cover; border-radius: 15px;">
                    
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('/smart') }}">Pelayanan tersedia</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-lg-3 wow fadeInUp mt-costum" data-wow-delay="0.4s" style="margin-top: 15px;">
                      
                        <div class="feature-item p-4 pt-0 text-center">
                           
                            <!-- Ikon dan teks konten -->
                            <h4 class="mb-4">SILE</h4>
                             <!-- Foto dengan rasio 4:3 dan lengkungan tumpul -->
                             <img src="https://rakyatborneo.com/wp-content/uploads/2022/05/FOTO-KETAPANG-13-MEI-.jpg" alt="Ale-Ale Image" class="img-fluid mb-4 rounded-4-3" style="width: 100%; object-fit: cover; border-radius: 15px;">
                    
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('/smart') }}">Pelayanan tersedia</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>



        <section class="about-section section-padding" id="section3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                            <h2 class="text-white mb-4">Tentang PATEN</h2>

                            <p class="text-white">PATEN adalah sistem pelayanan masyarakat yang menyatukan 3 sistem lain seperti Smart Village, Ale-Ale, dan SILE.</p>

                            <h6 class="text-white mt-4">Tujuan PATEN</h6>

                            <p class="text-white">PATEN hadir untuk memudahkan akses dari berbagai website agar lebih praktis.</p>

                            <h6 class="text-white mt-4">Lokasi PATEN</h6>

                            <p class="text-white">Ketapang, Kalimantan Barat, INDONESIA.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <img src="images/ketapang.jpeg" class="about-image img-fluid">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <!-- JAVASCRIPT FILES -->
    <script src="js/home/jquery.min.js"></script>
    <script src="js/home/bootstrap.min.js"></script>
    <script src="js/home/jquery.sticky.js"></script>
    <script src="js/home/click-scroll.js"></script>
    <script src="js/home/custom.js"></script>
    <!-- Bootstrap JavaScript Bundle (Required for Dropdown) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


</body>

</html>