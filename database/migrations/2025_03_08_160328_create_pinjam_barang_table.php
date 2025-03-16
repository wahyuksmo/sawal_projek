<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pinjam_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('kelas_peminjam');
            $table->string('rf_id');
            $table->date('tanggal_dipinjam');
            $table->enum('status', ['Tersedia', 'Dipinjam'])->default('Tersedia');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pinjam_barang');
    }
};
