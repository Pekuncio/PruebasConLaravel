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
        Schema::table('jugadores', function (Blueprint $table) {
            $table->foreignId('equipo_id')->constrained('equipos');
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    { 
        Schema::table('jugadores', function (Blueprint $table) {
            $table->dropForeign('jugadores_equipo_id_foreign');
            $table->dropIndex('jugadores_equipo_id_foreign');
            $table->dropColumn('equipo_id');
        });
    }
};