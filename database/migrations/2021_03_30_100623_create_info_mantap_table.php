<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoMantapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_mantap', function (Blueprint $table) {
            $table->id();
            $table->string('kategori')->nullable();
            $table->string('id_judul')->nullable();
            $table->string('en_judul')->nullable();
            $table->string('id_slug')->nullable();
            $table->string('en_slug')->nullable();
            $table->longText('id_isi')->nullable();
            $table->longText('en_isi')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('info_mantap');
    }
}
