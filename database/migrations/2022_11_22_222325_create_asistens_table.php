<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invitado_id');
            $table->unsignedBigInteger('seminario_id');

            $table->foreign('invitado_id')->references('id')->on('participantes');
            $table->foreign('seminario_id')->references('id')->on('seminarios');
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
        Schema::dropIfExists('asistens');
    }
}
