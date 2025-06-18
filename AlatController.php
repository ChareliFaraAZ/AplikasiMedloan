<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alat;

class AlatController extends Controller
{
    public function show($id)
    {
        $alat = Alat::findOrFail($id);
        return view('admin.laporan.detail_alat', compact('alat'));
    }

    public function edit($id)
    {
        $alat = Alat::findOrFail($id);
        return view('admin.laporan.edit_alat', compact('alat'));
    }

    public function destroy($id)
    {
        $alat = Alat::findOrFail($id);
        $alat->delete();
        return redirect()->route('admin.peminjaman')->with('success', 'Data alat berhasil dihapus.');
    }
}
