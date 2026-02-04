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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang', 50)->unique();
            $table->string('nama_barang', 100);
            // $table->foreignId('jenis_barang_id')->constrained('jenis_barangs')->restrictOnDelete();
            $table->string('merk', 100)->nullable();
            $table->unsignedBigInteger('jenis_barang_id');
            $table->text('spesifikasi')->nullable();
            $table->enum('status', ['tersedia', 'dipinjam', 'rusak', 'service', 'aktif'])->default('tersedia');
            $table->string('qr_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
