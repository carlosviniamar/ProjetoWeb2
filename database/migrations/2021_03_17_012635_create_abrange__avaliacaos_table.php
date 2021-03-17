<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbrangeAvaliacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abrange__avaliacaos', function (Blueprint $table) {
            $table->id();
            $table->foreign('avaliacaos_id')->references('id')->on('avaliacaos');
            $table->foreign('servicos_id')->references('id')->on('servicos');
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
        Schema::dropIfExists('abrange__avaliacaos');
    }
}
