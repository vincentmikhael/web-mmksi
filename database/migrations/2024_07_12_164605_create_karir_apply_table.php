<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('karir_apply', function (Blueprint $table) {
            $table->id();
            $table->integer('karir_id');
            $table->string('sumber_informasi');
            $table->string('gaji_diharapkan');
            $table->string('gaji_sebelumnya');
            $table->string('fasilitas_diharapkan');
            $table->string('fasilitas_sebelumnya');
            $table->string('lokasi_kerja');
            $table->string('cv');
            $table->string('nama');
            $table->string('no_telp');
            $table->string('email');
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
        Schema::dropIfExists('karir_apply');
    }
};
