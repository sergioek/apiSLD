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
        Schema::create('licencias', function (Blueprint $table) {
            $table->id();
            $table->date('finicio');
            $table->date('ffinal')->nullable();
            $table->integer('dias');
            $table->integer('obligacionesAfectadas')->nullable();
            $table->enum('injustificada',['SI','NO']);
            $table->enum('documentacion',['Completa','Incompleta']);
            $table->text('observaciones')->nullable();
            $table->foreignId('articulo_id')->constrained('articulos');
            $table->foreignId('obligacione_id')->constrained('obligaciones');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licencias');
    }
};
