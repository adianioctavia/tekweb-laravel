<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'nama_kategori' => 'Kursi',
        ]);
        Kategori::create([
            'nama_kategori' => 'Meja',
        ]);
        Kategori::create([
            'nama_kategori' => 'Rak',
        ]);
        Kategori::create([
            'nama_kategori' => 'Dipan',
        ]);
        Kategori::create([
            'nama_kategori' => 'Lemari',
        ]);
    }
}
