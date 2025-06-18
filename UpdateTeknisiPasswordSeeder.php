<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateTeknisiPasswordSeeder extends Seeder
{
    public function run()
    {
        User::where('email', 'budi@teknisi.com')
            ->where('role', 'teknisi') // pastikan role teknisi
            ->update([
                'password' => Hash::make('teknisi123')
            ]);
    }
}
