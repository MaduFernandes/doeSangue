<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doador', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('nome', 100);
            $table->string('email', 100);
            $table->unsignedSmallInteger('tipo_sanguineo_id');
            $table->foreign('tipo_sanguineo_id')->references('id')->on('tipo_sanguineo');
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
        Schema::dropIfExists('doador');
    }
}
