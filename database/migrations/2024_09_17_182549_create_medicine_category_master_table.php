<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineCategoryMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_category_master', function (Blueprint $table) {
            $table->id();
            $table->string('category_name')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('medicine_category_master');
    }
}
