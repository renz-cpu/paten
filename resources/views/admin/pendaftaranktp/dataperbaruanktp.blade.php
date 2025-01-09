<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.layout.css')
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
                        <h1 class="h3 mb-0 text-gray-800">Data Perbaruan KTP</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Nama Lengkap</th>
                                        <th class="text-center">NIK</th>
                                        <th class="text-center">Jenis Perubahan</th>
                                        <th class="text-center">Keterangan</th>
                                        <th class="text-center">Dokumen Pendukung</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pktp as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $item->nama }}</td>
                                            <td class="text-center">{{ $item->nik }}</td>
                                            <td class="text-center">{{ $item->jenis }}</td>
                                            <td class="text-center">{{ $item->ktr}}</td>
                                            <td class="text-center">
                                                <img src="{{ asset($item->foto) }}" width="100" height="50" style="object-fit:cover;" alt="Foto">
                                            </td>
                                            <td class="text-center">
                                                <!-- Form untuk Edit Status -->
                                                <form action="{{ route('updatestatus', $item->id) }}" method="POST">
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
                                            <td class="text-center">
                                                <form action="{{ route('hapusdataktp', $item->id) }}" method="POST"
                                                    onsubmit="return confirm('Apakah Anda Serius Ingin Menghapus??');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

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

</body>

</html>
