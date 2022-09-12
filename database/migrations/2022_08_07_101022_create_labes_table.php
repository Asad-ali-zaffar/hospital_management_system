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
        Schema::create('labes', function (Blueprint $table) {
            $table->id('lab_id');
            $table->string('Lab_name');
            $table->string('Lab_location');
            $table->bigInteger('Lab_priceP');
            $table->bigInteger('Lab_priceS');
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
        Schema::dropIfExists('labes');
    }
};
