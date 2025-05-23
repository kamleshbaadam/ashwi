<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('billings', function (Blueprint $table) {
            $table->dropColumn('balance');
            $table->dropColumn('overall_discount');
            $table->json('services')->nullable()->after('description');
            $table->json('qty')->nullable()->after('description');
            $table->json('rate')->nullable()->after('qty');
            $table->json('discount')->nullable()->after('rate');
            $table->json('total')->nullable()->after('discount');
            $table->json('description')->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
  public function down()
{
    Schema::table('billings', function (Blueprint $table) {
        $table->string('balance')->nullable()->after('case_memo_date');
        $table->string('overall_discount')->nullable()->after('balance');

        // Revert description column to string before dropping the JSON columns
        $table->string('description')->nullable()->change();

        $table->dropColumn('services');
        $table->dropColumn('qty');
        $table->dropColumn('rate');
        $table->dropColumn('discount');
        $table->dropColumn('total');
    });
}

}
