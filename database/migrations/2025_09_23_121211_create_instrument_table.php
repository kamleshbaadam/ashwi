<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrument', function (Blueprint $table) {
            $table->id();
            $table->string('area');
            $table->string('name');
            $table->unsignedBigInteger('assigned_to');
            $table->enum('period', ['daily', 'weekly', 'monthly', 'yearly']);
            $table->string('condition');
            $table->date('last_check_date');
            $table->enum('given_for', ['yes', 'no']);
            $table->string('name_of_given')->nullable();
            $table->date('date_of_given')->nullable();
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
        Schema::dropIfExists('instrument');
    }
}
