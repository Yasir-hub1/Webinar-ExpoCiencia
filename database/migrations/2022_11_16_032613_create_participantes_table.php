<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //PARTICIPANTES INVITADOS
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seminarios_id')
            ->nullable()
            ->constrained('seminarios')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->string('nombre');
            $table->string('foto');
            $table->string('profesion');
            $table->string('biografia');

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
        Schema::dropIfExists('participantes');
    }
}
