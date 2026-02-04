<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('set_details', function (Blueprint $table) {
            $table->foreign('set_id')
                ->references('id')
                ->on('sets')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('set_details', function (Blueprint $table) {
            $table->dropForeign(['set_id']);
        });
    }
};
