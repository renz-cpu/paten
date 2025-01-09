<?php

namespace App\Http\Controllers;

use App\Models\pbktp;
use App\Models\pktp;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log as FacadesLog;

class PerubahanktpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pktp = pktp::orderBy('created_at', 'asc')->get();
        
        return view('admin.pendaftaranktp.dataperbaruanktp', compact('pktp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view("pelayanan.perbaruanktp");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pktp = pktp::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis' => $request-> jenis,
            'ktr' => $request->ktr,
            'foto' => $request->foto,
        ]);

        $pktp->handleUploadFoto();
        return redirect('smart')->with('success', 'Silahkan Tunggu Prosesnya');
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'status' => 'required|in:menunggu,accepted,rejected',
        ]);
    
        // Cari data berdasarkan NIK
        $item = pktp::where('id', $id)->firstOrFail();
    
        // Update status
        $item->status = $request->status;
        $item->save();
    
        // Redirect atau beri respon
        return redirect()->back()->with('success', 'Status berhasil diperbarui');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    

    public function destroy(pktp $pktp)
    {
    
            $pktp->handleDelete();
            $pktp->delete();
    
            return redirect('admin/dataperbaruanktp')->with('success', 'Data Laporan Berhasil dihapus');
        }
    
}
