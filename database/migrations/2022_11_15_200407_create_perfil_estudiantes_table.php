<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string("carrera")->nullable();
            $table->text("biografia")->nullable();
            $table->string("foto")->nullable();

            $table->foreignId('user_estudiante_id')
                ->nullable()
                ->constrained('user_estudiantes')
                ->cascadeOnUpdate()
                ->nullOnDelete();
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
        Schema::dropIfExists('perfil_estudiantes');
    }
}
