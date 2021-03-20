<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavbarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navbar', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_navbar');
            $table->string('navigasi');
            $table->string('slug')->nullable();
            $table->longText('text_content')->nullable();
            $table->string('banner')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('id_bahasa_lain')->nullable();
            $table->string('kategori_laporan')->nullable();
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
        Schema::dropIfExists('navbar');
    }
}
