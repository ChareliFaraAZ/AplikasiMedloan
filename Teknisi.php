<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerawatanAlat;

class TeknisiController extends Controller
{
    public function index()
    {
        $alatList = PerawatanAlat::all();
        return view('teknisi.index', compact('alatList'));
    }

    public function updateStatus($id)
    {
        $perawatan = PerawatanAlat::findOrFail($id);
        $perawatan->status_perawatan = 'SELESAI';
        $perawatan->save();

        return redirect()->route('teknisi.index')->with('success', 'Status perawatan berhasil diubah.');
    }
}
