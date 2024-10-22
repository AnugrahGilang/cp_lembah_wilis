<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Buat akun admin
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin1234'),
            'level' => 'administrator',
            'status' => 'aktif',
        ]);
    }
}
