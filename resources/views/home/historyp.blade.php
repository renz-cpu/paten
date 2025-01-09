<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Perbaruan KTP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #ff6f00;
            padding: 10px 10px;
        }
        nav .navbar-brand {
            color: #000000;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
        }
        nav .navbar-brand:hover {
            color: #ff6f00;
            text-decoration: none;
        }
        nav .custom-btn {
            background-color: #fff;
            color: #ff6f00;
            border: 1px solid #ff6f00;
            padding: 5px 10px;
        }
        nav .custom-btn:hover {
            background-color: #ff6f00;
            color: #fff;
        }
        .container-fluid {
        margin: 100px auto 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex; /* Menggunakan Flexbox */
        flex-direction: column; /* Menyusun isi secara vertikal */
        align-items: center; /* Memastikan isi di tengah secara horizontal */
    }
        h1 {
            font-size: 24px;
            color: #333;
        }
        h1 span {
            color: #ff6f00;
        }
        table {
        width: 80%;
        border-collapse: collapse;
        margin: 20px auto; 
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
            word-wrap: break-word; /* Agar teks panjang terpotong dengan baik */
        }
        th {
            background-color: #f1f3f5;
            color: #495057;
            font-weight: bold;
        }
        th i {
            margin-left: 5px;
            color: #6c757d;
        }
        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .pagination span {
            color: #6c757d;
        }
        .pagination a {
            color: #ff6f00;
            text-decoration: none;
        }
        .pagination button {
            background-color: #ff6f00;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        .pagination button:disabled {
            background-color: #6c757d;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <main>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('paten') }}">PATEN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ route('history') }}">Pendaftaran Ktp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ route('historyp') }}">Perbaruan Ktp</a>
                        </li>
                    </ul>
                    <div class="dropdown d-lg-block d-none">
                        <a class="btn custom-btn" href="{{ url('/paten') }}" role="button">Kembali</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Table Content -->
        <div class="container-fluid">
            <div class="header">
                <h1>History Perbaruan KTP</span></h1>
            </div>
            <table>
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama Lengkap</th>
                        <th class="text-center">NIK</th>
                        <th class="text-center">Jenis Perubahan</th>
                        <th class="text-center">Keterangan</th>
                        <th class="text-center">Dokumen Pendukung</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pktp as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $item->nama }}</td>
                            <td class="text-center">{{ $item->nik }}</td>
                            <td class="text-center">{{ $item->jenis }}</td>
                            <td class="text-center">{{ $item->ktr ?? '-' }}</td>
                            <td class="text-center">
                                <img src="{{ asset($item->foto) }}" width="100" height="50" style="object-fit:cover;" alt="Foto">
                            </td>
                            <td class="text-center">
                                @if ($item->status == 'accepted')
                                    <span class="badge bg-success">Diterima</span>
                                @elseif ($item->status == 'rejected')
                                    <span class="badge bg-danger">Ditolak</span>
                                @else
                                    <span class="badge bg-secondary">Menunggu</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
