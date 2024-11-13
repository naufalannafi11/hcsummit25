<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name' => 'Naufal Annafi',
            'email' => 'naufalannafi@gmail.com',
            'password' => Hash::make('password123'), // Ganti dengan password yang diinginkan
        ]);
    }
}
