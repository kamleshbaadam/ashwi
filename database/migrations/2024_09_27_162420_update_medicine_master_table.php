<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMedicineMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medicine_master', function (Blueprint $table) {
            $table->string('power')->after('medicine_name')->nullable()->comment('500,50,10,20');
            $table->string('measure')->after('power')->nullable()->comment('mg,ml');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicine_master', function (Blueprint $table) {
            $table->dropColumn('power');
            $table->dropColumn('measure');
        });
    }
}
