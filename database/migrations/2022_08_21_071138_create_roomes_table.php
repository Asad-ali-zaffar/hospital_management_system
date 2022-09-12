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
        Schema::create('roomes', function (Blueprint $table) {
            $table->id('room_id');
            $table->enum('room_name',['PRIVATE','SEHAT_CARD']);
            $table->enum('room_type',['Ac','Non Ac']);
            $table->float('room_Price');
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
        Schema::dropIfExists('roomes');
    }
};
