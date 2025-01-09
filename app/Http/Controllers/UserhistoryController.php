<?php

namespace App\Http\Controllers;

use App\Models\bktp;
use Illuminate\Http\Request;

class UserhistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data pendaftaran KTP dan mengurutkannya berdasarkan 'created_at' secara menurun (terbaru ke lama)
        $datapendaftarktp = bktp::orderBy('created_at', 'asc')->get();
        
        return view('home.history', compact('datapendaftarktp'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
