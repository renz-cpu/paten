<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Pengajuan</title>
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
            color: #fff;
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
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        h1 span {
            color: #ff6f00;
        }
        /* Tambahkan CSS untuk tabel responsif */
        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }
        th {
            background-color: #f1f3f5;
            color: #495057;
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

        /* Styling untuk status */
        .status-diterima {
            background-color: #28a745;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
        }

        .status-ditolak {
            background-color: #dc3545;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <main>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/paten') }}">PATEN</a>
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
                <h1>History Pendaftaran KTP <span><i class="fas fa-hashtag"></i></span></h1>
            </div>

            <!-- Table wrapped in a div for horizontal scrolling -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>Status Pengajuan</th>
                            <th>NIK</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Pekerjaan</th>
                            <th>Status</th>
                            <th>Alamat</th>
                            <th>Agama</th>
                            <th>Gol. Darah</th>
                            <th>Email</th>
                            <th>Provinsi</th>
                            <th>Kota</th>
                            <th>Kecamatan</th>
                            <th>RT</th>              
                            <th>RW</th>
                            <th>Kelurahan</th>
                            <th>Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datapendaftarktp as $item )
                            <tr>
                                <td>{{ $loop->iteration }}</td>  <!-- Nomor urut mengikuti urutan data -->
                                <td>{{ $item->nama }}</td>
                                <td class="text-center">
                                    @if ($item->status == 'accepted')
                                        <span class="badge bg-success">Diterima</span>
                                    @elseif ($item->status == 'rejected')
                                        <span class="badge bg-danger">Ditolak</span>
                                    @else
                                        <span class="badge bg-secondary">Menunggu</span>
                                    @endif
                                </td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->tmpt }}</td>
                                <td>{{ $item->tgl }}</td>
                                <td>{{ $item->pk }}</td>
                                <td>{{ $item->stts }}</td>
                                <td>{{ $item->almt }}</td>
                                <td>{{ $item->agama }}</td>
                                <td>{{ $item->gol }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->provinsi }}</td>
                                <td>{{ $item->kota }}</td>
                                <td>{{ $item->kcmtn }}</td>
                                <td>{{ $item->rt }}</td>
                                <td>{{ $item->rw }}</td>
                                <td>{{ $item->klrhn }}</td>
                                <td>{{ $item->gender }}</td>
                            </tr>
                        @endforeach
                    </tbody>                    
                </table>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
