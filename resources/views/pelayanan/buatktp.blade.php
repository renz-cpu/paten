<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Form Pendaftaran E-KTP">
    <meta name="author" content="Your Name">

    <title>PATEN</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link href="css/home/min.css" rel="stylesheet">
    <link href="css/home/icons.css" rel="stylesheet">
    <link href="css/home/style.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Outfit', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .header {
            background-color: #ff6f00;
            color: #fff;
            text-align: center;
            padding: 15px;
            font-size: 24px;
            font-weight: bold;
            border-radius: 8px 8px 0 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group .inline {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .radio-label {
            display: flex;
            align-items: center;
            margin-right: 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .radio-label input[type="radio"] {
            appearance: none;
            width: 18px;
            height: 18px;
            border: 2px solid #ff6f00;
            border-radius: 50%;
            margin-right: 8px;
            cursor: pointer;
            outline: none;
            transition: 0.2s ease;
        }

        .radio-label input[type="radio"]:checked {
            background-color: #ff6f00;
            border-color: #ff6f00;
        }

        .radio-label input[type="radio"]:checked::before {
            content: '';
            display: block;
            width: 10px;
            height: 10px;
            background-color: #fff;
            border-radius: 50%;
            margin: auto;
            position: relative;
            top: 3px;
            left: 3px;
        }

        .form-group .buttons {
            text-align: center;
        }

        .form-group.buttons {
    display: flex;
    gap: 10px;
    justify-content: center;
    margin-top: 20px;
}

.submit-btn {
    background-color: #ff6f00;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.submit-btn:hover {
    background-color: #ff6f00;
    transform: scale(1.05);
}

.cancel-btn {
    background-color: #dc3545;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.cancel-btn:hover {
    background-color: #c82333;
    transform: scale(1.05);
}

        .alert {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8d7da;
            color: #842029;
            border: 1px solid #f5c2c7;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="header">Form Pendaftaran E-KTP</div>
            <form action="{{ route('simpandaftarktp') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                </div>

                <div class="form-group">
                    <label>Nomor Induk Kependudukan</label>
                    <input type="text" name="nik" placeholder="NIK" value="{{ old('nik') }}">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="inline">
                        <label class="radio-label"><input type="radio" name="gender" value="Laki - laki" {{ old('gender') == 'Laki - laki' ? 'checked' : '' }}> Laki - Laki</label>
                        <label class="radio-label"><input type="radio" name="gender" value="Perempuan" {{ old('gender') == 'Perempuan' ? 'checked' : '' }}> Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Tempat/Tanggal Lahir</label>
                    <div class="inline">
                        <input type="text" name="tmpt" placeholder="Tempat Lahir" value="{{ old('tmpt') }}">
                        <input type="date" name="tgl" value="{{ old('tgl') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="pk" placeholder="Pekerjaan" value="{{ old('pk') }}">
                </div>

                <div class="form-group">
                    <label>Agama</label>
                    <input type="text" name="agama" placeholder="Agama" value="{{ old('agama') }}">
                </div>

                <div class="form-group">
                    <label>Golongan Darah</label>
                    <input type="text" name="gol" placeholder="Golongan Darah" value="{{ old('gol') }}">
                </div>

                <div class="form-group">
                    <label>Status Pernikahan</label>
                    <div class="inline">
                        <label class="radio-label">
                            <input type="radio" name="stts" value="Menikah" {{ old('stts') == 'Menikah' ? 'checked' : '' }}> Menikah
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="stts" value="Belum Menikah" {{ old('stts') == 'Belum Menikah' ? 'checked' : '' }}> Belum Menikah
                        </label>
                    </div>
                </div>                

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="almt" placeholder="Alamat Lengkap" value="{{ old('almt') }}">
                </div>

                <div class="form-group">
                    <label>Provinsi</label>
                    <input type="text" name="provinsi" placeholder="Provinsi" value="{{ old('provinsi') }}">
                </div>

                <div class="form-group">
                    <label>Kota dan Kecamatan</label>
                    <div class="inline">
                        <input type="text" name="kota" placeholder="Kota" value="{{ old('kota') }}">
                        <input type="text" name="kcmtn" placeholder="Kecamatan" value="{{ old('kcmtn') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label>Kelurahan</label>
                    <input type="text" name="klrhn" placeholder="Kelurahan" value="{{ old('klrhn') }}">
                </div>

                <div class="form-group">
                    <label>RT / RW</label>
                    <div class="inline">
                        <input type="text" name="rt" placeholder="RT" value="{{ old('rt') }}">
                        <input type="text" name="rw" placeholder="RW" value="{{ old('rw') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                </div>

                <div class="form-group buttons">
                    <button type="submit" class="btn submit-btn">Kirim</button>
                    <a href="{{ url('/smart') }}" class="btn cancel-btn">Cancel</a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>