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
        Schema::create('obligaciones', function (Blueprint $table) {
            $table->id();
            $table->enum('caracter',['Titular','Suplente','Interino','Contratado']);
            $table->enum('turno',['M','T','N']);
            $table->integer('horas')->nullable();
            $table->json('dias');
            $table->date('fechaAlta');
            $table->string('origenVacante');
            $table->string('expedienteAlta');
            $table->string('numeroControl');
            $table->text('cupof');
            $table->text('observaciones')->nullable();
            $table->enum('division',['A','B','C','D','E','F','G','H','I'])->nullable();
            $table->string('causaBaja')->nullable();
            $table->date('fechaBaja')->nullable();
            $table->string('expedienteBaja')->nullable();
            $table->foreignId('docente_id')->constrained('docentes');
            $table->foreignId('cargo_id')->constrained('cargos');
            $table->foreignId('espacio_id')->nullable()->constrained('espacios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obligaciones');
    }
};
