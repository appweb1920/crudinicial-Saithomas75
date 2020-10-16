<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Detalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle', function (Blueprint $table) {
            $table->unsignedBigInteger('pr_id'); 
            $table->unsignedBigInteger('r_id'); 
            $table->foreign('pr_id')->references('id_pr')->on('puntos_reciclaje');
            $table->foreign('r_id')->references('id_r')->on('recolectores');
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
        Schema::dropIfExists('detalle');
    }
}
