<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PuntosReciclaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos_reciclaje', function (Blueprint $table) {
            $table->bigIncrements('id_pr');
            $table->string('tipo_basura');
            $table->string('apertura', 0);
            $table->time('horaA');
            $table->string('cierre', 0);
            $table->time('horaC');
            $table->softDeletes();
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
        Schema::dropIfExists('puntos_reciclaje');
    }
}
