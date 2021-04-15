<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditBanner4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banner', function (Blueprint $table) {
            $table->string('id_text_atas')->nullable();
            $table->string('id_text_tengah')->nullable();
            $table->string('id_text_bawah')->nullable();
            $table->string('en_text_atas')->nullable();
            $table->string('en_text_tengah')->nullable();
            $table->string('en_text_bawah')->nullable();
            $table->string('link_button_to')->nullable();
            $table->string('slug_link_button_to')->nullable();
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
