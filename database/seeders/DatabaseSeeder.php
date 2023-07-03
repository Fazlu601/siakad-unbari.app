<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Identitas_mahasiswa;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "username" => "admin",
            "password" => "admin"
        ]);

        Prodi::create([
            "kode" => "EK",
            "nama" => "Ekonomi",
            "nama_fakultas" => "Ilmu Ekonomi",
        ]);

        Mahasiswa::create([
            "nama_lengkap" => "Fazlu Rachman",
            "nim" => "8040190440",
            "email" => "fazrlu9575@gmail.com",
            "jenis_kelamin" => "laki-laki",
            "tanggal_lahir" => "2001-11-06",
            "agama" => "Islam",
            "no_telp" => "0895639394873",
            "angkatan" => "2019",
            "password" => Hash::make('061101'),
            "prodi_id" => 1,
            "waktu_kuliah" => "pagi"
        ]);

        Identitas_mahasiswa::create([
            "mahasiswa_id" => 1,
            "nik" => "1571070601010121",
            "nisn" => "0013632815"
        ]);

    }
}
