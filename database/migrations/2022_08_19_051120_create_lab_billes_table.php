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
        Schema::create('lab_billes', function (Blueprint $table) {
            $table->id('lab_bill_id');
            $table->dateTime('date_time');
            $table->string('customer_name')->default('WALKING');
            $table->string('business');
            $table->integer('Lab_Quantity');
            $table->float('Lab_Price');
            $table->float('creditammount');
            $table->string('discount');
            $table->float('Total_Bill');
            $table->string('usaer_name')->nullable();
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
        Schema::dropIfExists('lab_billes');
    }
};
