<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walking_test_mdcns', function (Blueprint $table) {
            $table->id('wtm_id');
            $table->unsignedBigInteger('lab_id');
            $table->foreign('lab_id')->references('lab_id')->on('labes');
            $table->bigInteger('lab_DISCOUNT');
            $table->unsignedBigInteger('madi_id');
            $table->foreign('madi_id')->references('madi_id')->on('Madicenes');
            $table->bigInteger('mdcn_DISCOUNT');
            $table->string('test_type');
            $table->bigInteger('test_Price');
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
        Schema::dropIfExists('walking_test_mdcns');
    }
};
