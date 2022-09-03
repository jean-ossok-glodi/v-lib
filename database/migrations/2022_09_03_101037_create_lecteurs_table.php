<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecteurs', function (Blueprint $table) {
            $table->id();
            $table->string("noms");
            $table->string("tel");
            $table->string("mail")->nullable();
            $table->string("pass");
            $table->date("naiss");
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
        Schema::dropIfExists('lecteurs');
    }
}
