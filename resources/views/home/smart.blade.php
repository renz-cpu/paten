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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #0A2540;
            color: #FFFFFF;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            .container {
    max-width: 1200px; /* Limit the width of the container */
    width: 100%;
    margin: 0 auto; /* Centers the container */
    padding: 0 20px; /* Adds padding on both sides */
}
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        p {
            font-size: 1em;
            margin-bottom: 40px;
            color: #B0BEC5;
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .button {
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
        }
        .button-primary {
            background-color: #20B486;
            color: #FFFFFF;
            border: none;
        }
        .button-secondary {
            background-color: transparent;
            color: #FFFFFF;
            border: 2px solid #FFFFFF;
        }
        #notifications {
    z-index: 9999 !important; /* Ensure the notification is always on top */
}

    </style>
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
                            <a class="nav-link click-scroll" href="#pengajuan">Pengajuan</a>
                            <a class="nav-link click-scroll" href="{{ route('history') }}">History</a>
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

        <div class="container" id="pengajuan">
            <h1>Pelayanan Ale - Ale</h1>
            <p>kami menyediakan beberapa pengajuan yang bisa digunakan seluruh masyarakat</p>
            <div class="buttons">
                <div class="col-md-3 col-lg-2 wow fadeInUp mt-costum" data-wow-delay="0.4s" style="margin-top: 10px;">
                    <div class="feature-item p-3 pt-0 text-center">
                        <!-- Ikon dan teks konten -->
                        <h4 class="mb-3" style="color: orange;">Pembuatan KTP</h4>
                        <!-- Foto dengan rasio 4:3 dan lengkungan tumpul -->
                        <img src="https://i0.wp.com/umsu.ac.id/berita/wp-content/uploads/2024/10/cara-mudah-ganti-foto-e-ktp-yang-sudah-jelek.webp?fit=740%2C375&ssl=1" alt="Ale-Ale Image" class="img-fluid mb-3 rounded-4-3" style="width: 100%; object-fit: cover; border-radius: 10px;">
                        <a class="btn btn-primary rounded-pill py-2 px-3" href="{{ route('buatktp') }}">Ajukan</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 wow fadeInUp mt-costum" data-wow-delay="0.4s" style="margin-top: 10px;">
                    <div class="feature-item p-3 pt-0 text-center">
                        <!-- Ikon dan teks konten -->
                        <h4 class="mb-3" style="color: orange;">Perbaruan KTP</h4>
                        <!-- Foto dengan rasio 4:3 dan lengkungan tumpul -->
                        <img src="https://i0.wp.com/umsu.ac.id/berita/wp-content/uploads/2024/10/cara-mudah-ganti-foto-e-ktp-yang-sudah-jelek.webp?fit=740%2C375&ssl=1" alt="Ale-Ale Image" class="img-fluid mb-3 rounded-4-3" style="width: 100%; object-fit: cover; border-radius: 10px;">
                        <a class="btn btn-primary rounded-pill py-2 px-3" href="{{ route('perbaruanktp') }}">Ajukan</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 wow fadeInUp mt-costum" data-wow-delay="0.4s" style="margin-top: 10px;">
                    <div class="feature-item p-3 pt-0 text-center">
                        <!-- Ikon dan teks konten -->
                        <h4 class="mb-3" style="color: orange;">Pembuatan KK</h4>
                        <!-- Foto dengan rasio 4:3 dan lengkungan tumpul -->
                        <img src="https://lh6.googleusercontent.com/proxy/RLJbRNliZg8-7mGW0nqTsQbi3k6iY5EHPhfiTyqUJmqYJtHnxK6NJmXJEWme4Pym69gUfhDk-ThRsQiJYCcGQhpPjvDo" alt="Ale-Ale Image" class="img-fluid mb-3 rounded-4-3" style="width: 100%; object-fit: cover; border-radius: 10px;">
                        <a class="btn btn-primary rounded-pill py-2 px-3" href="{{ route('perbaruanktp') }}">Ajukan</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 wow fadeInUp mt-costum" data-wow-delay="0.4s" style="margin-top: 10px;">
                    <div class="feature-item p-3 pt-0 text-center">
                        <!-- Ikon dan teks konten -->
                        <h4 class="mb-3" style="color: orange;">Perbaruan KK</h4>
                        <!-- Foto dengan rasio 4:3 dan lengkungan tumpul -->
                        <img src="https://lh6.googleusercontent.com/proxy/RLJbRNliZg8-7mGW0nqTsQbi3k6iY5EHPhfiTyqUJmqYJtHnxK6NJmXJEWme4Pym69gUfhDk-ThRsQiJYCcGQhpPjvDo" alt="Ale-Ale Image" class="img-fluid mb-3 rounded-4-3" style="width: 100%; object-fit: cover; border-radius: 10px;">
                        <a class="btn btn-primary rounded-pill py-2 px-3" href="{{ route('perbaruanktp') }}">Ajukan</a>
                    </div>
                </div>
                
        
<!-- Wadah Notifikasi -->
<div id="notifications" class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 1050;">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>


    <!-- JAVASCRIPT FILES -->
    <script src="js/home/jquery.min.js"></script>
    <script src="js/home/bootstrap.min.js"></script>
    <script src="js/home/jquery.sticky.js"></script>
    <script src="js/home/click-scroll.js"></script>
    <script src="js/home/custom.js"></script>
    <!-- Bootstrap JavaScript Bundle (Required for Dropdown) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let notification = document.querySelector('.alert');
        if (notification) {
            setTimeout(function () {
                notification.classList.add('fade');
                notification.classList.remove('show');
            }, 5000); // Notification will fade out after 5 seconds
        }
    });
</script>



</body>

</html>