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


            $table->foreignId('profesion_id')
            ->nullable()
            ->constrained('profesions')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('institucion_id')
            ->nullable()
            ->constrained('users')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->string('nombre')->nullable();
            $table->string('correo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('foto')->nullable();

            $table->string('biografia')->nullable();

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
