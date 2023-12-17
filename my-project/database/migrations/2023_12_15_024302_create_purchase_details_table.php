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
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('boleto_id');// unsignedBigInteger = sinSingnoGrandeEntero
            $table->unsignedBigInteger('product_id');// unsignedBigInteger = sinSingnoGrandeEntero
            $table->unsignedBigInteger('purchase_id');// unsignedBigInteger = sinSingnoGrandeEntero
            $table->float('importe');// unsignedBigInteger = sinSingnoGrandeEntero

            $table->foreign('boleto_id')//Creacion de llave foranea
            ->references('id')//la cual esta referenciada al campo id 
            ->on('tickets')// de la tabla purchases
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('product_id')//Creacion de llave foranea
            ->references('id')//la cual esta referenciada al campo id 
            ->on('products')// de la tabla purchases
            ->onUpdate('cascade')
            ->onDelete('cascade');


            $table->foreign('purchase_id')//Creacion de llave foranea
            ->references('id')//la cual esta referenciada al campo id 
            ->on('purchases')// de la tabla purchases
            ->onUpdate('cascade')
            ->onDelete('cascade');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_details');
    }
};
