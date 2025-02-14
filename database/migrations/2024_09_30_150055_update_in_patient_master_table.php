<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInPatientMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_master', function (Blueprint $table) {
            $table->tinyInteger('mediclaim')->default(0)->after('blood_group')->comment('0 is yes 1 is no')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_master', function (Blueprint $table) {
            $table->dropColumn('mediclaim');
        });
    }
}
