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
        Schema::create('set_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('set_id');
            $table->unsignedBigInteger('barang_id');
            $table->timestamps();

            $table->unique(['set_id', 'barang_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('set_details');
    }
};
