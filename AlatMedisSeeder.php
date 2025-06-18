<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AlatMedis;

class AlatMedisSeeder extends Seeder
{
    public function run(): void
    {
        AlatMedis::create([
            'nama' => 'UAP OKSIGEN',
            'gambar' => 'uap oksigen.png',
        ]);
    }
}
