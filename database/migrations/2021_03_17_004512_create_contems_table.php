<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contems', function (Blueprint $table) {
            $table->id();
            $table->foreign('prestadores_id')->references('id')->on('prestadores');
            $table->foreign('redes_sociais_id')->references('id')->on('redes_sociais');
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
        Schema::dropIfExists('contems');
    }
}
