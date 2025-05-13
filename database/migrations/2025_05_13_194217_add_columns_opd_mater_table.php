<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsOpdMaterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('opd_master', function (Blueprint $table) {
            $table->dropColumn('height');
            $table->string('bp')->nullable()->after('weight');
            $table->string('hbp')->nullable()->after('temperature');
            $table->string('lbp')->nullable()->after('hbp');
            $table->string('diabetes')->nullable()->after('lbp');
            $table->string('other')->nullable()->after('diabetes');

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
            $table->dropColumn('bp');
            $table->dropColumn('hbp');
            $table->dropColumn('lbp');
            $table->dropColumn('diabetes');
            $table->dropColumn('other');
        });
    }
}
