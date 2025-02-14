<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_master', function (Blueprint $table) {
            $table->id();
            $table->string('medicine_name')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('price',20,2)->default('0')->nullable();
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
        Schema::dropIfExists('medicine_master');
    }
}
