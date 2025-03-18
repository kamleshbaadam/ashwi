<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('opd_master_id');
            $table->unsignedBigInteger('appointments_id');
            $table->unsignedBigInteger('patient_master_id');
            $table->string('billing_no')->nullable();
            $table->string('taxation')->nullable();
            $table->string('package')->nullable();
            $table->string('account')->nullable();
            $table->date('case_memo_date')->nullable();
            $table->string('balance')->nullable();
            $table->string('mode_of_payment')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('overall_discount')->nullable();
            $table->string('subtotal')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
    
            $table->foreign('opd_master_id')->references('id')->on('opd_master')->onDelete('cascade');
            $table->foreign('appointments_id')->references('id')->on('appointments')->onDelete('cascade');
            $table->foreign('patient_master_id')->references('id')->on('patient_master')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billings');
    }
}
