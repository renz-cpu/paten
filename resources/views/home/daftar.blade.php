<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran KTP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 600px;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, 
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group input[type="file"] {
            padding: 3px;
        }
        .form-group .error {
            color: red;
            font-size: 0.9em;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Pendaftaran KTP</h2>
    <form method="POST" action="{{ route('ktp.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="name" required>
            <span class="error">@error('name') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="nik">Nomor Induk Kependudukan (NIK)</label>
            <input type="text" id="nik" name="nik" required>
            <span class="error">@error('nik') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="birth_date">Tanggal Lahir</label>
            <input type="date" id="birth_date" name="birth_date" required>
            <span class="error">@error('birth_date') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="gender">Jenis Kelamin</label>
            <select id="gender" name="gender" required>
                <option value="">Pilih...</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            <span class="error">@error('gender') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" id="address" name="address" required>
            <span class="error">@error('address') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="nomor_hp">Nomor HP</label>
            <input type="text" id="nomor_hp" name="nomor_hp" required>
            <span class="error">@error('nomor_hp') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="akte_kelahiran">Unggah Foto Akte Kelahiran</label>
            <input type="file" id="akte_kelahiran" name="akte_kelahiran" accept="image/*" required>
            <span class="error">@error('akte_kelahiran') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="photo">Unggah Foto Diri</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>
            <span class="error">@error('photo') {{ $message }} @enderror</span>
        </div>

        <button type="submit" class="btn">Daftar</button>
    </form>
</div>

<section class="about-section section-padding" id="section1">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                <div class="services-info">
                    <h2 class="text-white mb-4">Fitur PATEN</h2>

                    <h6 class="text-white mt-4">1. Pembuatan KTP</h6>
                    <p class="text-white" href="{{ route('') }}">PATEN menyediakan layanan pembuatan KTP yang cepat dan efisien, memudahkan masyarakat untuk mendapatkan dokumen identitas resmi.</p>

                    <h6 class="text-white mt-4">2. Perbaruan KTP</h6>
                    <p class="text-white" href="{{ route() }}">Layanan perbaruan KTP memastikan data pribadi Anda selalu akurat dan terkini, sehingga Anda tidak perlu khawatir dengan informasi yang kadaluarsa.</p>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="about-text-wrap">
                    <img src="images/ketapang.jpeg" class="about-image img-fluid" alt="Ketapang">
                </div>
            </div>

        </div>
    </div>
</section>

</body>
</html>
