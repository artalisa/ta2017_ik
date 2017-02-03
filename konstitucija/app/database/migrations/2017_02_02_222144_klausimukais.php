<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Klausimukais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('klausimukais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Klausimas');
            $table->string('Teisingas_ats');
            $table->string('Neteisingas_ats1');
            $table->string('Neteisingas_ats2');
            $table->string('Neteisingas_ats3');
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
         Schema::drop('klausimukais');
    }
}
