<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosisMedicineMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosis_medicine_master', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('diagnostics_id')->nullable();
            $table->string('medicine_id')->nullable();
            $table->tinyInteger('status')->default('0')->comment('0 is inactive 1 is active')->nullable();
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
        Schema::dropIfExists('diagnosis_medicine_master');
    }
}
