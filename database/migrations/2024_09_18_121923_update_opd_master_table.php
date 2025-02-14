<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOpdMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('opd_master', function (Blueprint $table) {
            $table->string('status')->default(0)->comment('0 is in queue');
            $table->time('waiting_time')->after('appointment_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('opd_master', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('waiting_time');
        });
    }
}
