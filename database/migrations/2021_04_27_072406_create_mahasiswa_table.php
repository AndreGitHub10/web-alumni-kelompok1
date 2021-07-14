<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->char('nrp', 10)->unique();
            $table->char('email')->unique();
            $table->string('jurusan');
            $table->string('alamat');
            $table->string('motivasi');
            $table->string('pekerjaan');
            $table->string('tempatPekerjaan');
            $table->string('telepon');
            $table->string('gambar');
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
        Schema::dropIfExists('mahasiswa');
    }
}
