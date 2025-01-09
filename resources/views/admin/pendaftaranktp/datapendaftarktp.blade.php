<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layout.css')
    <style>
        /* Styling Tabel */
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            width: 100%;
        }

        table {
            width: 100%;
            table-layout: auto; /* Mengatur tabel agar kolom disesuaikan otomatis */
        }

        th, td {
            text-align: center; /* Menyelaraskan teks ke tengah */
            padding: 12px 8px; /* Menambahkan padding agar lebih rapi */
        }

        th {
            background-color: #f1f3f5;
            color: #495057;
            font-weight: bold;
        }

        td {
            border-top: 1px solid #dee2e6;
        }

        td:nth-child(7), th:nth-child(7) {
            width: 180px; /* Mengatur kolom 'Status' lebih lebar */
        }

        td:nth-child(8), th:nth-child(8) {
            width: 200px; /* Kolom 'Alamat' lebih lebar */
        }

        td:nth-child(9), th:nth-child(9) {
            width: 150px; /* Kolom 'Email' lebih lebar */
        }

        td:nth-child(10), th:nth-child(10) {
            width: 150px; /* Kolom 'Provinsi' lebih lebar */
        }

        td:nth-child(11), th:nth-child(11) {
            width: 150px; /* Kolom 'Kota' lebih lebar */
        }

        td:nth-child(12), th:nth-child(12) {
            width: 150px; /* Kolom 'Kecamatan' lebih lebar */
        }

        td:nth-child(13), th:nth-child(13) {
            width: 100px; /* Kolom 'RT' lebih lebar */
        }

        td:nth-child(14), th:nth-child(14) {
            width: 100px; /* Kolom 'RW' lebih lebar */
        }

        td:nth-child(15), th:nth-child(15) {
            width: 150px; /* Kolom 'Kelurahan' lebih lebar */
        }

        .text-center {
            text-align: center;
        }

        .btn {
            margin: 0 5px; /* Memberikan sedikit jarak pada tombol */
        }
    </style>
</head>

@include('admin.layout.sidebar')

<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        @include('admin.layout.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Pendaftaran KTP</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name Lengkap</th>
                                <th>Status Pengajuan</th>
                                <th>Nik</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Pekerjaan</th>
                                <th>Status</th>
                                <th>Alamat</th>
                                <th>Agama</th>
                                <th>Golongan Darah</th>
                                <th>Email</th>
                                <th>Provinsi</th>
                                <th>Kota</th>
                                <th>Kecamatan</th>
                                <th>RT</th>
                                <th>RW</th>
                                <th>Kelurahan</th>
                                <th>Jenis Kelamin</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datapendaftarktp as $item )
                                <tr>
                                    <td class="text-center">{{ $loop->iteration}}</td>
                                    <td class="text-center">{{ $item->nama }}</td>
                                    <td class="text-center">
                                        <!-- Form untuk Edit Status -->
                                        <form action="{{ route('updatektp', $item->nik) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <select name="status" class="form-select form-select-sm">
                                                <option value="menunggu" {{ $item->status == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                                                <option value="accepted" {{ $item->status == 'accepted' ? 'selected' : '' }}>Diterima</option>
                                                <option value="rejected" {{ $item->status == 'rejected' ? 'selected' : '' }}>Ditolak</option>
                                            </select>
                                            <button type="submit" class="btn btn-sm btn-primary mt-2">
                                                <i class="fas fa-save"></i> Simpan
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center">{{ $item->nik }}</td>
                                    <td class="text-center">{{ $item->tmpt }}</td>
                                    <td class="text-center">{{ $item->tgl }}</td>
                                    <td class="text-center">{{ $item->pk }}</td>
                                    <td class="text-center">{{ $item->stts }}</td>
                                    <td class="text-center">{{ $item->almt }}</td>
                                    <td class="text-center">{{ $item->agama }}</td>
                                    <td class="text-center">{{ $item->gol }}</td>
                                    <td class="text-center">{{ $item->email }}</td>
                                    <td class="text-center">{{ $item->provinsi }}</td>
                                    <td class="text-center">{{ $item->kota }}</td>
                                    <td class="text-center">{{ $item->kcmtn }}</td>
                                    <td class="text-center">{{ $item->rt }}</td>
                                    <td class="text-center">{{ $item->rw }}</td>
                                    <td class="text-center">{{ $item->klrhn }}</td>
                                    <td class="text-center">{{ $item->gender }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('hapusktp', $item->nik) }}" method="POST" onsubmit="return confirm('Apakah Anda Serius Ingin Menghapus??');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                    
                                </tr>
                            @endforeach
                            @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    @include('admin.layout.footer')
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admincss/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admincss/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admincss/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admincss/js/demo/chart-pie-demo.js') }}"></script>
</div>
</body>

</html>
