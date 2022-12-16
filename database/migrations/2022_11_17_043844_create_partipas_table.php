<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartipasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partipas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('participante_local_id');
            $table->unsignedBigInteger('seminario_id');

            $table->foreign('participante_local_id')->references('id')->on('participante_locals');
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
        Schema::dropIfExists('partipas');
    }
}
