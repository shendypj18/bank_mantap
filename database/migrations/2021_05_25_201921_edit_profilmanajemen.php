<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditProfilmanajemen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profile_management_table', function (Blueprint $table) {
            $table->longText('pengalaman_kerja')->nullable();
            $table->longText('posisi_saat_ini')->nullable();
            $table->longText('dasar_hukum_penunjukan')->nullable();
            $table->longText('hubungan_afiliasi')->nullable();
            $table->longText('masa_jabatan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profile_management_table', function (Blueprint $table) {
            //
        });
    }
}
