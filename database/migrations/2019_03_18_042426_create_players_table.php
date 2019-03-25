<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',32)->unique();
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('password');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('hasCreated')->default(0);
            $table->tinyInteger('vip_level')->default(1);
            $table->string('withdraw_pwd');
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
        Schema::dropIfExists('players');
    }
}
