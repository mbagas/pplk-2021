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
            $table->string('nama')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('roles_id');
            $table->string('nim')->nullable()->unique();
            $table->integer('kelompok')->nullable();
            $table->string('instagram')->nullable();
            $table->foreignId('prodis_id')->nullable();
            $table->foreign('roles_id')->references('id')->on('roles');
            $table->foreign('prodis_id')->references('id')->on('prodis')->onDelete('cascade');
            $table->rememberToken();
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
