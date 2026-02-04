<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->foreign('jenis_barang_id')
                ->references('id')
                ->on('jenis_barangs')
                ->restrictOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->dropForeign(['jenis_barang_id']);
        });
    }
};
