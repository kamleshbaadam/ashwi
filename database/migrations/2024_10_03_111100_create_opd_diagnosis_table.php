<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpdDiagnosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opd_diagnosis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('opd_id')->nullable();
            $table->bigInteger('diagnosis_id')->nullable();
            $table->string('diagnosis_name')->nullable();
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
        Schema::dropIfExists('opd_diagnosis');
    }
}
