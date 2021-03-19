<?php

namespace Database\Seeders;

use App\Models\KategoriLaporan;
use Illuminate\Database\Seeder;

class KategoriLaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        KategoriLaporan::insert(
            [
                [ "jenis" => "umum"],
                [ "jenis" => "keuangan"],
                [ "jenis" => "tahunan"],
                [ "jenis" => "ksk"],
                [ "jenis" => "tata kelola"],
            ]
        );

    }
}
