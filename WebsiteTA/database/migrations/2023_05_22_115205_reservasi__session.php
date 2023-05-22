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
        Schema::create('Reservasi_Session', function (Blueprint $table) {
            $table->id();            
            $table->string('session_name');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('kuota')->default(20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Reservasi_Session');
    }
};
