<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipanteLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participante_locals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('institucion_id')
                ->nullable()
                ->constrained('users')
                ->cascadeOnUpdate()
                ->nullOnDelete();

                $table->foreignId('profesions_id')
                ->nullable()
                ->constrained('profesions')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->string('nombre');
            $table->string('carrera');
            $table->string('biografia');
            $table->string('facultad');

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
        Schema::dropIfExists('participante_locals');
    }
}
