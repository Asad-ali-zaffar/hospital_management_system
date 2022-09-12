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
        Schema::create('o_p_des', function (Blueprint $table) {
            $table->id('opd_id');
            $table->string('Patient_Name');
            $table->string('Son_of_Do_of');
            $table->enum('gender',['m','f','o'])->default('m');
            $table->string('mr_no');
            $table->string('visit_no');
            $table->unsignedBigInteger('dr_name');
            $table->foreign('dr_name')->references('doctor_id')->on('doctores');
            $table->string ('dr_fee');
            $table->date('date');
            $table->time('time');
            $table->string('husband_name');
            $table->string('husband_mobile_no');
            $table->string('pat_mobile_no');
            $table->string('cnic_pat');
            $table->enum('Type_Department',['Orthopadic', 'ENT', 'uorolgy', 'gynaecology', 'General Surgery', 'Medical Case' ]);
            $table->string('Ultrasound')->nullable();
            $table->string('Ultrasound_price')->nullable();
            $table->string('lab_id');
            $table->string('Lab_Quantity');
            $table->string('Lab_Price');
            $table->string('Labsum');
            $table->string('mdcn_id');
            $table->string('mdcn_Quantity');
            $table->string('MDCN_Price');
            $table->string('Mdcnammount');
            $table->string('discount');
            $table->string('total');
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
        Schema::dropIfExists('o_p_des');
    }
};
