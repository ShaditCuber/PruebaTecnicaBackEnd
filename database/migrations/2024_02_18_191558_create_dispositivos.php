<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('dispositivos', function (Blueprint $table) {
            $table->id('dispositivo_id');
            $table->foreignId('bodega_id')->constrained('bodegas', 'bodega_id');
            $table->foreignId('modelo_id')->constrained('modelos', 'modelo_id');
            $table->string('nombre', 255);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispositivos');
    }
};
