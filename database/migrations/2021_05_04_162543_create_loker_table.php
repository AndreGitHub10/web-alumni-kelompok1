<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loker', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('pekerjaan');
            $table->char('email')->unique();
            $table->string('alamat');
            $table->string('foto');
            $table->string('fotoloker');
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
        Schema::dropIfExists('loker');
    }
}
