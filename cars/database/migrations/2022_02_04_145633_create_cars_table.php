<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('founded');
            $table->longText('description');
            $table->timestamps();
        });

        // One to many Elloquent
        Schema::create('car_models', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('car_id');
            $table->string('model_name');
            $table->timestamps();
            // A chave estrangeira é o car_id que referencia 'id' na tabela 'cars'. onDelete('cascade') vai deletar os modelos do crs automaticamente se o car for deletado. também pode ser onDelete('set null') que quando deletar um car específico vai colocar o car_id como null
            $table->foreign('car_id')
            ->references('id')
            ->on('cars')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
