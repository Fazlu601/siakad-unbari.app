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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nim');
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('agama')->nullable();
            $table->year('angkatan');
            $table->string('password');
            $table->unsignedBigInteger('prodi_id');
            $table->enum('waktu_kuliah', ['pagi', 'malam']);
            $table->foreign('prodi_id')->references('id')->on('prodis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
