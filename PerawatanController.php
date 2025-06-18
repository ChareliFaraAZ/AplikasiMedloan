<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perawatan; 
use App\Models\PerawatanAlat;

class PerawatanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi form
        $validatedData = $request->validate([
            'nama_teknisi' => 'required',
            'unit_kerja' => 'required',
            'tanggal_perbaikan' => 'required|date',
            'waktu_perbaikan' => 'required',
            'jenis_perawatan' => 'required',
            'deskripsi_tindakan' => 'required',
            'nama_alat' => 'required',
            'kondisi_setelah_perawatan' => 'required',
            'gambar' => 'nullable|image|max:2048',
            'pernyataan' => 'accepted',
        ]);

        // Simpan file gambar jika ada
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('perawatan_images', 'public');
            $validatedData['gambar'] = $path;
        }

        // Simpan data perawatan
        Perawatan::create($validatedData);

        // Update status alat
        $alat = PerawatanAlat::where('nama_alat', $request->nama_alat)->first();

        if ($alat) {
            $alat->status_perawatan = 'SELESAI';
            $alat->save();
        }

        return redirect()->route('teknisi.index')->with('success', 'Perawatan berhasil disimpan dan status diperbarui.');
    }
}
