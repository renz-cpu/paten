<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Perbaruan KTP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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

        .form-group input[type="text"],
        .form-group input[type="file"],
        .form-group input[type="date"],
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group input[type="checkbox"] {
            margin-right: 10px;
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

    </style>
</head>
<body>
    <div class="container">
        <div class="header">Form Perbaruan KTP</div>
        <form id="form-ktp" action="{{ route('simpanperubahanktp') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nik">NIK (Nomor Induk Kependudukan):</label>
                <input type="text" id="nik" name="nik" placeholder="Masukkan NIK Anda" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" required>
            </div>
            <div class="form-group">
                <label>Jenis Perubahan:</label>
                <div>
                    <label><input type="checkbox" name="jenis" value="Status Perkawinan"> Status Perkawinan</label>
                    <label><input type="checkbox" name="jenis" value="Alamat"> Alamat</label>
                    <label><input type="checkbox" name="jenis" value="Data Pribadi Lainnya"> Data Pribadi Lainnya</label>
                    <label><input type="checkbox" name="jenis" value="Ktp Rusak"> KTP Rusak</label>
                    <label><input type="checkbox" name="jenis" value="Ktp Hilang"> KTP Hilang</label>
                </div>
            </div>
            <div class="form-group">
                <label for="ktr">Keterangan Tambahan:</label>
                <input type="text" id="ktr" name="ktr" placeholder="Masukkan keterangan tambahan (opsional)">
            </div>
            <div class="form-group">
                <label for="foto">Unggah Dokumen Pendukung:</label>
                <input type="file" id="foto" name="foto" accept=".pdf, .jpg, .jpeg, .png" required>
            </div>
            <div class="form-group buttons">
                <input class="submit-btn" type="submit" value="Kirim">
                <a href="{{ url('/smart') }}" class="cancel-btn">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
