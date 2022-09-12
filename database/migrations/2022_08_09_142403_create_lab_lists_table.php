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
        Schema::create('lab_lists', function (Blueprint $table) {
            $table->id('lb_id');
            $table->string('lb_Test_name');
            $table->bigInteger('lb_test_price');
            $table->unsignedBigInteger('lab_no');
            $table->foreign('lab_no')->references('lab_id')->on('labes');
            $table->date('lb_date');
            $table->dateTime('d_t_blood_sample_colecte');
            $table->dateTime('d_t_reporting_of_test_results');
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
        Schema::dropIfExists('lab_lists');
    }
};
