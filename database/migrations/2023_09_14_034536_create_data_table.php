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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap');
            $table->string('nik')->unique();
            $table->string('jenisKelamin');
            $table->string('ttl');
            $table->string('usia');
            $table->string('alamatLengkap');
            $table->string('pekerjaan');
            $table->string('status');
            $table->string('namaIS')->nullable();
            $table->string('jumlahAnak')->nullable();
            $table->string('wilayah');
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
        Schema::dropIfExists('data');
    }
};
