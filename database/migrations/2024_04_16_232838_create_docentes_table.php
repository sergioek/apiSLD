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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('apellidos');
            $table->string('nombres');
            $table->char('dni',9);
            $table->char('prefixCUIL',2);
            $table->char('postfixCUIL',1);
            $table->date('fnacimiento');
            $table->string('lnacimiento');
            $table->string('localidad');
            $table->string('domicilio');
            $table->enum('estadoCivil',['Soltero/a','Casado/a','Divorciado/a','Viudo/a']);
            $table->date('finicioDocencia');
            $table->string('titulo1');
            $table->string('titulo2')->nullable();
            $table->string('email');
            $table->string('tel');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
