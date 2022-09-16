<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delits', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('lieu');
            $table->string('ampleur');
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
        Schema::dropIfExists('delits');
    }
}
