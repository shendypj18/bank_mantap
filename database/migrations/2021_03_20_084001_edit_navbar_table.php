<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditNavbarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('navbar', function (Blueprint $table) {
            $table->string('en_slug')->nullable();
            $table->string('en_banner')->nullable();
            $table->longText('en_text_content')->nullable();
            $table->renameColumn('slug', 'id_slug');
            $table->renameColumn('banner', 'id_banner');
            $table->renameColumn('text_content', 'id_text_content');
            $table->dropColumn('bahasa');
            //
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
            $table->dropColumn('en_slug')->nullable();
            $table->dropColumn('en_banner')->nullable();
            $table->dropColumn('en_text_content')->nullable();
            $table->string('bahasa');
            //
        });
    }
}
