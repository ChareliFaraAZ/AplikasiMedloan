<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlatMedis;
use Illuminate\Support\Str; // pastikan ini ditambahkan
use App\Models\Peminjaman;
use Illuminate\Support\Facades\DB; // ✅ Tambahkan baris ini
use Carbon\Carbon;



class PeminjamanController extends Controller
{
    // Menampilkan halaman daftar alat medis
    public function index(Request $request)
{
    $search = $request->query('search');

    $alat = AlatMedis::when($search, function ($query, $search) {
        return $query->where('nama', 'like', '%' . $search . '%');
    })->get();

    return view('peminjaman', compact('alat'));
}


    // Menyimpan data alat medis baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $namaFile = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('assets'), $namaFile);

        AlatMedis::create([
            'nama' => $request->nama,
            'gambar' => $namaFile,
            'slug' => Str::slug($request->nama) . '-' . time(), // otomatis buat slug unik
        ]);

        return redirect()->route('peminjaman')->with('success', 'Alat medis berhasil ditambahkan.');
    }

    // Menampilkan halaman form peminjaman berdasarkan id
    public function formPeminjaman(Request $request)
{
    $alat_id = $request->query('alat_id');

    $alat = AlatMedis::find($alat_id);

    if (!$alat) {
        return redirect()->route('peminjaman')->with('error', 'Alat tidak ditemukan.');
    }

    return view('form_peminjaman', compact('alat'));
}

public function indexAdmin()
{
    $alat = AlatMedis::all();

    // Ambil role dari session (harus diset di proses login)
    $role = session('role'); 

    if ($role == 'admin') {
        // kalau admin → pakai view admin/laporan/peminjaman_admin.blade.php
        return view('admin.laporan.peminjaman_admin', compact('alat'));
    } else {
        // kalau selain admin → pakai view peminjaman.blade.php
        return view('peminjaman', compact('alat'));
    }
}

public function prosesPeminjaman(Request $request)
{
    $request->validate([
        'nama_peminjam' => 'required|string|max:255',
        'tanggal_pinjam' => 'required|date',
        'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
        'alat_id' => 'required|exists:alat_medis,id',
        'jumlah' => 'required|integer|min:1',
    ]);

    $alat = AlatMedis::find($request->alat_id);

    if (!$alat) {
        return back()->with('error', 'Alat tidak ditemukan.');
    }

    if ($request->jumlah > $alat->stok) {
        return back()->with('error', 'Jumlah melebihi stok yang tersedia.');
    }

    // Simpan peminjaman
    Peminjaman::create([
        'nama_peminjam' => $request->nama_peminjam,
        'tanggal_peminjaman' => $request->tanggal_pinjam,
        'tanggal_pengembalian' => $request->tanggal_kembali,
        'alat_id' => $request->alat_id,
        'jumlah' => $request->jumlah,
    ]);

    // Kurangi stok alat
    $alat->stok -= $request->jumlah;
    $alat->save();

    // Tambahkan ke laporan_pemakaian
    DB::table('laporan_pemakaian')->insert([
        'nama_alat' => $alat->nama,
        'nama_peminjam' => $request->nama_peminjam,
        'durasi_pemakaian' => $request->jumlah,

        'total_hari' => Carbon::parse($request->tanggal_pinjam)->diffInDays(Carbon::parse($request->tanggal_kembali)),
        'keperluan' => '-', // kalau ingin tambahkan kolom di form, bisa diganti
        'tanggal_terakhir' => $request->tanggal_kembali,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return view('sukses_peminjaman');
}





}
