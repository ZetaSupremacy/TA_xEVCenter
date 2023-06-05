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
        
        Schema::create('reservation_groups', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('pengunjung_id')->references('id')->on('pengunjung')->onDelete('cascade');
            $table->integer('reservation_sessions_id')->references('id')->on('reservation_sessions');
            $table->string('pic_name');
            $table->string('nama_group');
            $table->string('tanggal');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('registration_confirmation_at')->nullable();
            $table->integer('group_code')->unique();
            $table->integer('total_member');
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
        Schema::dropIfExists('reservation_groups');
    }
};
