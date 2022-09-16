<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertes', function (Blueprint $table) {
            $table->id();
            $table->string('typepiece');
            $table->string('nomperdant');
            $table->string('prenomperdant');
            $table->string('dateperte');
            $table->string('numeroperdant');
            $table->string('lieuramassage');
            $table->string('nomrerouvant');
            $table->string('prenomretrouvant');
            $table->string('telephoneretrouvant');
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('civils')->onDelete('cascade');
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
        Schema::dropIfExists('pertes');
    }
}
