<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori_berita;

class KategoriBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori_berita::create([
            "nama" => 'none',
        ]);
    }
}
