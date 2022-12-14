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
        Schema::create('interpretacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('interprete_id');
            $table->unsignedBigInteger('musica_id');
            $table->double('ano_gravacao');
            $table->string('ambiente');
            $table->foreign('interprete_id')->references('id')->on('interpretes');
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
