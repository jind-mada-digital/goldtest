<?php namespace OFFLINE\Mall\Updates;

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use Schema;

class AddProductIdsColumnToDiscountsTable extends Migration
{
    public function up()
    {
        Schema::table('offline_mall_discounts', function (Blueprint $table) {
            $table->text('product_ids')->after('max_number_of_usages')->nullable();
        });
    }

    public function down()
    {
        Schema::table('offline_mall_discounts', function (Blueprint $table) {
            $table->dropColumn(['product_ids']);
        });
    }
}
