<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnOpdMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('opd_master', function (Blueprint $table) {
            $table->string('visit_no')->nullable();
            $table->dateTime('visit_date')->nullable();
            $table->date('next_visit_date')->nullable();
            $table->string('language')->nullable();
            $table->string('checkup_type')->nullable();
            $table->text('complain')->nullable();
            $table->text('examination')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('oxygen')->nullable();
            $table->string('temperature')->nullable();
            $table->text('investigation')->nullable();
            $table->text('advise')->nullable();
            $table->text('billing')->nullable();
            $table->text('surgery')->nullable();
            $table->text('admit')->nullable();
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
            $table->dropColumn('visit_no');
            $table->dropColumn('visit_date');
            $table->dropColumn('next_visit_date');
            $table->dropColumn('language');
            $table->dropColumn('checkup_type');
            $table->dropColumn('complain');
            $table->dropColumn('examination');
            $table->dropColumn('weight');
            $table->dropColumn('height');
            $table->dropColumn('oxygen');
            $table->dropColumn('temperature');
            $table->dropColumn('investigation');
            $table->dropColumn('advise');
            $table->dropColumn('billing');
            $table->dropColumn('surgery');
            $table->dropColumn('admit');
        });
    }
}
