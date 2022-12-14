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
        Schema::create('artistas_interpretes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artista_id');
            $table->unsignedBigInteger('interprete_id');
            $table->string('papel');
            $table->foreign('artista_id')->references('id')->on('artistas');
            $table->foreign('interprete_id')->references('id')->on('interpretes');
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
