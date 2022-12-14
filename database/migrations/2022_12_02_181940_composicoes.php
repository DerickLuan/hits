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
        Schema::create('composicoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artista_id');
            $table->unsignedBigInteger('musica_id');
            $table->foreign('artista_id')->references('id')->on('artistas');
            $table->foreign('musica_id')->references('id')->on('musicas');
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
        //
    }
};
