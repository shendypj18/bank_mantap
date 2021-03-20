<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Edit2NavbarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('navbar', function (Blueprint $table) {
            $table->renameColumn('navigasi', 'id_navigasi');
            $table->string('en_navigasi');
            $table->removeColumn('id_bahasa_lain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('navbar', function (Blueprint $table) {
            $table->removeColumn('en_navigasi');
            $table->string('id_bahasa_lain');
        });
    }
}
