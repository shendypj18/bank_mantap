<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmtpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_smtp', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email_pengirim');
            $table->string('email_host');
            $table->string('username');
            $table->string('password');
            $table->integer('port')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_smtp');
    }
}
