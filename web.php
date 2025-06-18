<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\PerawatanController;
use App\Http\Controllers\LaporanKerusakanController;
use App\Http\Controllers\LaporanPerbaikanController;

// Halaman awal
Route::get('/', function () {
    return redirect()->route('login');
});

// Login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [LoginController::class, 'proses'])->name('login.proses');

// Home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Peminjaman (user/tenaga medis)
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::get('/tenaga_medis/peminjaman', [PeminjamanController::class, 'index'])->name('tenaga_medis.peminjaman');

Route::post('/prosespeminjaman', [PeminjamanController::class, 'prosesPeminjaman'])->name('prosespeminjaman');


Route::get('/lapor-kerusakan', [LaporanKerusakanController::class, 'create'])->name('form.lapor.kerusakan');

Route::post('/lapor-kerusakan', [LaporanKerusakanController::class, 'store'])->name('laporan-kerusakan.store');

Route::get('/laporan-kerusakan', [LaporanKerusakanController::class, 'index'])->name('laporan-kerusakan.index');


// Form pengajuan
Route::get('/form_peminjaman', [PeminjamanController::class, 'formPeminjaman'])->name('form_peminjaman');

// Admin - Laporan
Route::get('/laporan-pemakaian', [LaporanController::class, 'index'])->name('laporan.pemakaian');
Route::get('/laporan-pemakaian/export', [LaporanController::class, 'export'])->name('laporan.pemakaian.export');

// Admin - Peminjaman (lihat alat)
Route::get('/admin/peminjaman_admin', function () {
    return view('admin.laporan.peminjaman_admin', [
        'alat' => \App\Models\Alat::all()
    ]);
})->name('admin.peminjaman');

Route::get('/pengelolaan_daftar_alat_medis', function () {
    return view('admin.laporan.pengelolaan_daftar_alat_medis');
})->name('pengelolaan.daftar.alat.medis');

Route::get('/persetujuan_pengelolaan', function () {
    return view('admin.laporan.persetujuan_pengelolaan');
})->name('persetujuan.pengelolaan');

Route::get('/teknisi/index', function () {
    return view('teknisi.index');
})->name('teknisi.index');

// tampilkan form perawatan
Route::get('/form-perawatan', function (Illuminate\Http\Request $request) {
    $nama_alat = $request->query('nama_alat');
    return view('teknisi.form_perawatan', compact('nama_alat'));
})->name('form.perawatan');

Route::post('/perawatan/store', [PerawatanController::class, 'store'])->name('perawatan.store');

Route::get('/laporan-sukses', function () {
    return view('teknisi.laporan_sukses'); // atau 'laporan_sukses' jika itu nama sebenarnya
})->name('laporan.sukses');

//teknisi
use App\Http\Controllers\TeknisiController;

Route::get('/teknisi', [TeknisiController::class, 'index'])->name('teknisi.index');
Route::patch('/perawatan/{id}/selesai', [TeknisiController::class, 'updateStatus'])->name('perawatan.selesai');

Route::get('/teknisi', [TeknisiController::class, 'index'])->name('teknisi.index');
Route::put('/teknisi/update/{id}', [TeknisiController::class, 'updateStatus'])->name('teknisi.updateStatus');

Route::get('/laporan-kerusakan/{id}/detail', [LaporanKerusakanController::class, 'show'])->name('laporan-kerusakan.show');

Route::get('/form-laporan-perbaikan', function () {
    return view('teknisi.laporan_perbaikan');
})->name('laporan.perbaikan.form');

Route::post('/laporan-perbaikan', [LaporanPerbaikanController::class, 'store'])->name('laporan.perbaikan.store');


Route::post('/laporan-kerusakan/{id}/verifikasi', [LaporanKerusakanController::class, 'verifikasi'])->name('laporan-kerusakan.verifikasi');

Route::get('/laporan-perbaikan/create/{id}', [LaporanPerbaikanController::class, 'create'])->name('laporan-perbaikan.create');

// Admin - CRUD Alat
Route::get('alat/{id}', [AlatController::class, 'show']);
Route::get('alat/{id}/edit', [AlatController::class, 'edit']);
Route::delete('alat/{id}', [AlatController::class, 'destroy']);

// Optional - Tambah alat
Route::get('admin/tambahalat', [AlatController::class, 'create'])->name('admin.alat.create');
Route::post('admin/tambahalat', [AlatController::class, 'store'])->name('admin.alat.store');
