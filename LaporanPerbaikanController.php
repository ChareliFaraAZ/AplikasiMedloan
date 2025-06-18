<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanKerusakan;

class LaporanPerbaikanController extends Controller
{
    public function create($id)
{
    $laporan = LaporanKerusakan::findOrFail($id);
    return view('teknisi.laporan_perbaikan', compact('laporan'));
}


    public function store(Request $request)
{
    $request->validate([
         'laporan_kerusakan_id' => 'required|exists:laporan_kerusakan,id',
        'nama_teknisi' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'tanggal' => 'required|date',
        'waktu' => 'required',
        'nama_alat' => 'required|string|max:255',
        'laporan' => 'required|string',
        
    ]);

    // Simpan gambar jika ada
    $path = null;
    if ($request->hasFile('gambar')) {
        $path = $request->file('gambar')->store('perbaikan_images', 'public');
    }

    // Simpan data ke database (buat model jika belum)
    \App\Models\LaporanPerbaikan::create([
        'nama_teknisi' => $request->nama_teknisi,
        'gambar' => $path,
        'tanggal' => $request->tanggal,
        'waktu' => $request->waktu,
        'nama_alat' => $request->nama_alat,
        'laporan' => $request->laporan,
        'laporan_kerusakan_id' => $request->laporan_kerusakan_id, // <= ini penting
    ]);

    $laporanKerusakan = \App\Models\LaporanKerusakan::find($request->laporan_kerusakan_id);
if ($laporanKerusakan) {
    $laporanKerusakan->status = 'Telah Diperbaiki';
    $laporanKerusakan->save();
}




    return redirect()->back()->with('success', 'Laporan perbaikan berhasil dikirim!');

    
}
}
