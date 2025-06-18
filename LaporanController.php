<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class LaporanController extends Controller
{
    public function index(Request $request)
    {
        // Ambil filter bulan dari query string (misalnya '06-2025')
        $bulan = $request->input('bulan');

        // Ambil query dasar
        $query = DB::table('laporan_pemakaian')
            ->select(
                'nama_alat',
                'nama_peminjam',
                'durasi_pemakaian',
                'total_hari',
                'keperluan',
                'tanggal_terakhir'
            );

        // Jika user pilih filter bulan, tambahkan filter WHERE
        if ($bulan) {
            // bulan dikirim dalam format 'MM-YYYY' → kita ubah jadi awal & akhir bulan
            $parts = explode('-', $bulan);
            $startDate = Carbon::createFromDate($parts[1], $parts[0], 1)->startOfMonth();
            $endDate = Carbon::createFromDate($parts[1], $parts[0], 1)->endOfMonth();

            $query->whereBetween('tanggal_terakhir', [$startDate, $endDate]);
        }

        // Jalankan query
        $laporan = $query->get();

        // Kirim data ke view + info filter bulan saat ini
       return view('admin.laporan.pemakaian', compact('laporan', 'bulan'));

    }

    public function export(Request $request)
    {
        $bulan = $request->input('bulan');

        // Ambil data sesuai filter, sama seperti di index
        $query = DB::table('laporan_pemakaian')
            ->select(
                'nama_alat',
                'nama_peminjam',
                'durasi_pemakaian',
                'total_hari',
                'keperluan',
                'tanggal_terakhir'
            );

        if ($bulan) {
            $parts = explode('-', $bulan);
            $startDate = Carbon::createFromDate($parts[1], $parts[0], 1)->startOfMonth();
            $endDate = Carbon::createFromDate($parts[1], $parts[0], 1)->endOfMonth();

            $query->whereBetween('tanggal_terakhir', [$startDate, $endDate]);
        }

        $laporan = $query->get();

        // Tampilkan ke view yang sama → laporan.pemakaian
       return view('admin.laporan.pemakaian', compact('laporan', 'bulan'));

    }
}
