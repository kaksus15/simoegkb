<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nip');
            $table->bigInteger('nik');
            $table->string('nama');
            $table->string('gelar_depan')->nullable();
            $table->string('gelar_belakang')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('karpeg');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Budha']);
            $table->enum('golongan_darah', ['A', 'AB', 'B', 'O', 'Tidak Tahu']);
            $table->enum('status_pernikahan', ['Nikah', 'Belum Nikah', 'Cerai Mati', 'Cerai Hidup']);
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->string('npwp')->nullable();
            $table->string('bpjs')->nullable();
            $table->enum('status_pegawai', ['PNS', 'HONORER']);
            $table->string('sk_cpns')->nullable();
            $table->date('tanggal_cpns')->nullable();
            $table->string('sk_pns')->nullable();
            $table->date('tanggal_pns')->nullable();
            $table->foreignId('golongan_id');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
