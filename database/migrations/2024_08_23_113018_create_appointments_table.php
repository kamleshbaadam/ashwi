<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table)
        {
            $table->id();
            $table->string('name');
            $table->string('phone_no');
            $table->string('reference')->nullable();
            $table->string('type')->nullable();
            $table->string('case_type')->nullable();
            $table->bigInteger('doctor_id')->nullable();
            $table->dateTime('appointment_date')->nullable();
            $table->time('morning_waiting_time')->nullable();
            $table->time('evening_waiting_time')->nullable();
            $table->string('status')->default('booked');
            $table->longText('remark')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
