<?php

namespace App\Http\Controllers;

use App\Models\bktp;
use App\Models\makektp;
use App\Models\User;
use Illuminate\Http\Request;

class PendaftarKtpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datapendaftarktp = bktp::orderBy('created_at', 'asc')->get();
        
        return view('admin.pendaftaranktp.datapendaftarktp', compact('datapendaftarktp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view("pelayanan.buatktp");
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        bktp::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tmpt' => $request->tmpt,
            'tgl' => $request->tgl,
            'pk' => $request->pk,
            'stts' => $request->stts,
            'almt' => $request->almt,
            'agama' => $request->agama,
            'gol' => $request->gol,
            'email' => $request->email,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kcmtn' => $request->kcmtn,
            'klrhn' => $request->klrhn,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'gender' => $request->gender,
        ]);
        
        return redirect('smart')->with('success', 'Silahkan Tunggu Prosesnya');
    }

    /**
     * Display the specified resource.
     */
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
    public function update(Request $request, string $nik)
    {
        $request->validate([
            'status' => 'required|in:menunggu,accepted,rejected',
        ]);
    
        // Cari data berdasarkan NIK
        $item = bktp::where('nik', $nik)->firstOrFail();
    
        // Update status
        $item->status = $request->status;
        $item->save();
    
        // Redirect atau beri respon
        return redirect()->back()->with('success', 'Status berhasil diperbarui');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nik)
    {
       // Find the record by NIK
    $record = bktp::where('nik', $nik)->first();

    // If the record is found, delete it
    if ($record) {
        $record->delete();
        return redirect()->route('datapendaftarktp')->with('success', 'Data berhasil dihapus');
    } else {
        return redirect()->route('datapendaftarktp')->with('error', 'Data tidak ditemukan');
    }
    }

}
