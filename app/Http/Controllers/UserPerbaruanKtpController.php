<?php

namespace App\Http\Controllers;

use App\Models\pktp;
use Illuminate\Http\Request;

class UserPerbaruanKtpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pktp = pktp::orderBy('created_at', 'asc')->get();
        
        return view('home.historyp', compact('pktp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
