<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->string('nombreE');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedBigInteger('laboratorio_id');
            $table->foreign('laboratorio_id')->references('id')->on('laboratorios');
            $table->string('formato');
            $table->string('unidadMedida');
            $table->integer('precio1');
            $table->integer('precio2');
            $table->string('valReferencia1');
            $table->string('valReferencia2');
            $table->string('valReferencia3');
            $table->string('valReferencia4');
            $table->string('valReferencia5');
            $table->string('valReferencia6');
            $table->string('valReferencia7');
            $table->string('valReferencia8');
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
        Schema::dropIfExists('examens');
    }
}
