<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reservasi_Group', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengunjung_id')->references('id')->on('pengunjung')->onDelete('cascade');
            $table->integer('session_id');
            $table->string('nama_group');
            $table->string('tanggal');
            $table->boolean('konfirmasi_email')->default(false);;
            $table->boolean('konfirmasi_registrasi')->default(false);;
            $table->boolean('konfirmasi_kunjungan')->default(false);;
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
        Schema::dropIfExists('Reservasi_Group');
    }
};
