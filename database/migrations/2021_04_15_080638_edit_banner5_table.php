<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditBanner5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banner', function (Blueprint $table) {
            $table->longText('id_text_atas')->nullable()->change();
            $table->longText('id_text_tengah')->nullable()->change();
            $table->longText('id_text_bawah')->nullable()->change();
            $table->longText('en_text_atas')->nullable()->change();
            $table->longText('en_text_tengah')->nullable()->change();
            $table->longText('en_text_bawah')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banner', function (Blueprint $table) {
            //
        });
    }
}
