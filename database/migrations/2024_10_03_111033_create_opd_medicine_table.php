<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpdMedicineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opd_medicine', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('opd_id')->nullable();
            $table->bigInteger('medicine_id')->nullable();
            $table->string('medicine_name')->nullable();
            $table->text('medicine_description')->nullable();
            $table->string('unit')->nullable();
            $table->string('days')->nullable();
            $table->string('qty')->nullable();
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
        Schema::dropIfExists('opd_medicine');
    }
}
