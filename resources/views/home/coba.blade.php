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

                        <a class="btn custom-btn smoothscroll" href="#section2">Layanaphpn Tersedia</a>
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