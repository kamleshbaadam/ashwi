<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInOpdMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('opd_master', function (Blueprint $table) {
            $table->tinyInteger('mediclaim')->default(0)->after('remarks')->comment('0 is yes 1 is no')->nullable();
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
            $table->dropColumn('mediclaim');
        });
    }
}
