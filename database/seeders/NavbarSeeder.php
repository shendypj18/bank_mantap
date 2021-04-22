<?php

namespace Database\Seeders;

use App\Models\KategoriNavbar;
use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriNavbar::insert([
            ["nama" => "TENTANG KAMI"],
            ["nama" => "PINJAMAN"],
            ["nama" => "SIMPANAN"],
            ["nama" => "INFO MANTAP"],
            ["nama" => "JASA BANK"],
            //["nama" => "CABANG"],
            //["nama" => "SIMULASI"],
        ]);
    }
}
