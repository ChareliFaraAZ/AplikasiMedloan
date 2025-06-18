<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateSitiPasswordSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'siti@hospital.com')->first();

        if ($user) {
            $user->password = Hash::make('12345678');
            $user->save();

            echo "✅ Password user {$user->email} sudah diupdate!\n";
        } else {
            echo "❌ User dengan email siti@hospital.com tidak ditemukan.\n";
        }
    }
}
