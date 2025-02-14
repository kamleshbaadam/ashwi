<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpdReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opd_report', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('opd_id')->nullable();
            $table->bigInteger('report_id')->nullable();
            $table->string('report_name')->nullable();
            $table->text('report_description')->nullable();
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
        Schema::dropIfExists('opd_report');
    }
}
