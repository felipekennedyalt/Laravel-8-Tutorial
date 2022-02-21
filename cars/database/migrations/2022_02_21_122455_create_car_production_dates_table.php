<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarProductionDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_production_dates', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('model_id');
            $table->date('created_at');
            //a foreign key é model_id dessa tabela, que referencia o 'id' da tabela car_models, e ao deletar o car também será deletado o seu modelo
            $table->foreign('model_id')->references('id')->on('car_models')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_production_dates');
    }
}
