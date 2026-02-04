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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('barang_id')->constrained('barangs')->restrictOnDelete();
            // $table->foreignId('set_id')->nullable()->constrained('sets')->nullOnDelete();
            $table->unsignedBigInteger('barang_id'); // FK
            $table->unsignedBigInteger('set_id')->nullable();
            $table->date('tanggal_service');
            $table->string('jenis_kerusakan', 255);
            $table->text('tindakan')->nullable();
            $table->string('teknisi', 100);
            $table->enum('status', ['proses', 'selesai'])->default('proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
