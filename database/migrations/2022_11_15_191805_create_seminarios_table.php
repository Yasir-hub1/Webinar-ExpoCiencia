<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminarios', function (Blueprint $table) {
            $table->id();

            //foranea de userInstitucion
            $table->foreignId('id_institucion')
                ->nullable()
                ->constrained('users')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            //foranea de Idiomas
            $table->foreignId('id_idioma')
                ->nullable()
                ->constrained('idiomas')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->string('titulo');
            $table->string('descripcion');
            $table->string('duracion');
            $table->string('link');
            $table->string('videoGrabado');
            $table->string('estado');
            $table->string('lugar');

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
        Schema::dropIfExists('seminarios');
    }
}
