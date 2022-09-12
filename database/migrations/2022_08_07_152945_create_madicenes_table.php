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
        Schema::create('madicenes', function (Blueprint $table) {
            $table->id('madi_id');
            $table->string('madi_name');
            $table->string('madi_type');
            $table->bigInteger('madi_priceP');
            $table->bigInteger('madi_priceS');
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
        Schema::dropIfExists('madicenes');
    }
};
