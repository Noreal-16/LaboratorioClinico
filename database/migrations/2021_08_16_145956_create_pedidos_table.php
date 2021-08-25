<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer('numeroPedido');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('medico_id')->references('id')->on('medicos');
            $table->unsignedBigInteger('medico_id');
            $table->foreign('examen_id')->references('id')->on('examens');
            $table->unsignedBigInteger('examen_id');
            $table->date('fecha');
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
        Schema::dropIfExists('pedidos');
    }
}
