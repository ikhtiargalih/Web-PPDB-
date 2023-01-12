<?php

namespace Database\Seeders;

use \App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'nisn' => '12108840',
            'namalengkap' => 'Galih Iktiar',
            'asalsekolah' => 'SMP Negeri 02 Ciawi',
            'email' => 'galih@gmail.com',
            'no_hp' => '085885666581',
            'no_hp_ayah' => '085697673335',
            'no_hp_ibu' => '081234567812',
            'referensi' => 'Siswa SMK Wikrama',
            'role' => 'admin',
            'jk' => 'Laki-laki',
            'password' => bcrypt('admin123')
        ]);
    }
}
