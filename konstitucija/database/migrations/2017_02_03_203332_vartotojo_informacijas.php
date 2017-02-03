<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VartotojoInformacijas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('vartotojo_informacijas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vartotojo_vardas');
            $table->string('miestas');
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
        //Schema::drop('vartotojo_informacijas');
    }
}
