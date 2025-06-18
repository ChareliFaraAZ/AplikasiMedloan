<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanKerusakan;

class LaporanKerusakanController extends Controller
{
    public function create()
    {
        return view('form_laporan_kerusakan'); // pastikan ini adalah nama Blade kamu
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alat_medis' => 'required|string',
            'jabatan' => 'required|string',
            'tanggal_laporan' => 'required|date',
            'isi_laporan' => 'required|string',
        ]);

        LaporanKerusakan::create([
            'nama_pelapor' => $request->nama,
            'alat_medis' => $request->alat_medis,
            'jabatan' => $request->jabatan,
            'tanggal_laporan' => $request->tanggal_laporan,
            'isi_laporan' => $request->isi_laporan,
        ]);

        return redirect()->back()->with('success', 'Laporan berhasil dikirim.');
    }

   public function index()
{
    $laporans = LaporanKerusakan::all(); // atau model yang kamu pakai
    return view('teknisi.laporan_kerusakan', compact('laporans'));

}
public function show($id)
{
    $laporan = LaporanKerusakan::findOrFail($id);

    // Misalnya ingin tampilkan data teknisi/perbaikan juga
    return view('teknisi.tinjau_detail', compact('laporan'));
}

}