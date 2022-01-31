<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            //datos del estudiante general
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('dni')->unique();
            $table->date('fechanac')->nullable();
            $table->string('lugar')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('distrito')->nullable();
            $table->integer('adoptado')->nullable();
            $table->date('fecharegistro')->nullable();
            //datos del Sistema
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
}
