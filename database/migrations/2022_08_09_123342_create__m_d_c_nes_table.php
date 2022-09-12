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
        Schema::create('_m_d_c_nes', function (Blueprint $table) {
            $table->id('mdcn_id');
            $table->string('mdcn_name');
            $table->string('mdcn_type');
            $table->bigInteger('mdcn_SALE');
            $table->bigInteger('mdcn_SINGLE_ITEM_ADD');
            $table->bigInteger('mdcn_mg/g');
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
        Schema::dropIfExists('_m_d_c_nes');
    }
};
