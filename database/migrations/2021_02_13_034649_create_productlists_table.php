<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productlists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Model');
            $table->string('sname');
            $table->foreign('sname')->references('sname')->on('serieslists');
            $table->string('FResponse');
            $table->string('Power');
            $table->string('Lmpedance');
            $table->string('Sensitvity');
            $table->string('img01');
            $table->string('img02');
            $table->string('img03');
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
        Schema::dropIfExists('productlists');
    }
}
