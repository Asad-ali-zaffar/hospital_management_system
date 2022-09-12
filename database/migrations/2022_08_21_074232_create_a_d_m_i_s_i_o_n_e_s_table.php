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
        Schema::create('a_d_m_i_s_i_o_n_e_s', function (Blueprint $table) {
            $table->id('admision_id');
            $table->string('Patient_Name');
            $table->string('Son_of_Do_of');
            $table->enum('gender',['m','f','o'])->default('m');
            $table->string('mr_no');
            $table->string('visit_no');
            $table->unsignedBigInteger('dr_name');
            $table->foreign('dr_name')->references('doctor_id')->on('doctores');
            $table->string('dr_fee');
            $table->date('date');
            $table->time('time');
            $table->string('husband_name');
            $table->string('husband_mobile_no');
            $table->string('pat_mobile_no');
            $table->string('cnic_pat');
            $table->string('husband_cnic');
            $table->enum('CASE_TYPE',['surgical','non surgical' ]);
            $table->enum('Type_Department',['Orthopadic', 'ENT', 'uorolgy', 'gynaecology', 'General Surgery', 'Medical Case' ]);
            $table->string('lab_id')->nullable();
            // $table->foreign('lab_id')->references('lab_id')->on('labes');
            $table->string('madi_id')->nullable();
            // $table->foreign('madi_id')->references('madi_id')->on('madicenes');
            $table->dateTime('IN_OUT');
            $table->dateTime('DISCHARGE_DATE');
            $table->unsignedBigInteger('PAT_REFERED_BY');
            $table->foreign('PAT_REFERED_BY')->references('pat_id')->on('pat_refered_bies');
            $table->unsignedBigInteger('PRIVATE_SEHAT_CARD');
            $table->foreign('PRIVATE_SEHAT_CARD')->references('room_id')->on('roomes');
            $table->enum('ROOM_TYPE',['AC','Non Ac']);
            $table->double('ROOM_CHARGES');
            $table->string('OPD_INCLUDE')->nullable();
            $table->string('procedure');
            $table->string('UPS_charges')->nullable();
            $table->string('Lab_Quantity')->nullable();
            $table->string('Lab_Price')->nullable();
            $table->string('Labsum')->nullable();
            $table->string('mdcn_Quantity')->nullable();
            $table->string('MDCN_Price')->nullable();
            $table->string('Mdcnammount')->nullable();
            $table->string('dcnammount')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('a_d_m_i_s_i_o_n_e_s');
    }
};
