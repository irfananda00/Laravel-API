<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMhsKls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Mahasiswa_kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_mahasiswa')->unsigned(); // ini karena FK dari kolom tabel yang increments
            $table->integer('id_kelas')->unsigned();
            $table->foreign('id_mahasiswa')->references('id')->on('Mahasiswa'); // FK dari id di Mahasiswa
            $table->foreign('id_kelas')->references('id')->on('Kelas'); // FK dari id di Kelas
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mahasiswa_kelas');
    }
}
