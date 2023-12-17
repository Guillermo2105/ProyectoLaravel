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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->unsignedBigInteger('section_id');// unsignedBigInteger = sinSingnoGrandeEntero

            $table->foreign('section_id')//Creacion de llave foranea
            ->references('id')//la cual esta referenciada al campo id 
            ->on('sections')// de la tabla sections
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
