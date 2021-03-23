<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_management_table', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('kategori_jabatan')->nullable();
            $table->string('umur')->nullable();
            $table->string('warga_negara')->nullable();
            $table->string('domisili')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('gambar')->nullable();
            $table->string('id_deskripsi')->nullable();
            $table->string('en_deskripsi')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_management');
    }
}
