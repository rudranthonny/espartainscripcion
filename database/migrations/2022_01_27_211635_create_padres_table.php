<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->integer('edad');
            $table->string('domicilio');
            $table->string('telefono');
            $table->string('estudios');
            $table->string('dni');
            $table->string('profesion');
            $table->string('trabajo_domicilio');
            $table->string('trabajo_telefono');
            $table->char('encargado')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('padres');
    }
}
