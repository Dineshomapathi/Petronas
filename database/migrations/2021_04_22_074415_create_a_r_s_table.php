<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateARSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_r_s', function (Blueprint $table) {
            $table->id();
            $table->string('uniqueid')->unique();
            $table->string('ytlink1')->nullable();
            $table->string('ytlink2')->nullable();
            $table->string('ytlink3')->nullable();
            $table->string('ytlink4')->nullable();
            $table->string('ytlink5')->nullable();
            $table->string('ytlink6')->nullable();
            $table->string('ytlink7')->nullable();
            $table->string('ytlink8')->nullable();
            $table->string('ytlink9')->nullable();
            $table->string('ytlink10')->nullable();
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
        Schema::dropIfExists('a_r_s');
    }
}
