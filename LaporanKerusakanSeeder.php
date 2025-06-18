<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanKerusakanSeeder extends Seeder
{
    public function run()
    {
        DB::table('laporan_kerusakan')->insert([
            [
                'nama_pelapor' => 'RINA MARLINA',
                'alat_medis' => 'UAP OKSIGEN',
                'jabatan' => 'PERAWAT RUANG ICU',
                'tanggal_laporan' => '2025-02-05',
                'isi_laporan' => 'Kerusakan pada alat uap tidak menyala saat dinyalakan.'
            ],
            [
                'nama_pelapor' => 'ANDRIYAN MAULANA',
                'alat_medis' => 'DIGITAL SPHYGMOMANOMETER',
                'jabatan' => 'PERAWAT RUANG RAWAT INAP',
                'tanggal_laporan' => '2025-02-12',
                'isi_laporan' => 'Layar tidak menampilkan hasil pengukuran.'
            ],
            [
                'nama_pelapor' => 'SITI RAHMAWATI',
                'alat_medis' => 'KURSI RODA',
                'jabatan' => 'PETUGAS TRANSPORTASI PASIEN',
                'tanggal_laporan' => '2025-02-15',
                'isi_laporan' => 'Roda kiri tidak bisa berputar.'
            ],
        ]);
    }
}
