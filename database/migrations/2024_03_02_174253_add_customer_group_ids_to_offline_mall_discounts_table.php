<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomerGroupIdsToOfflineMallDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offline_mall_discounts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->text('customer_group_ids')->nullable()->after('shipping_guaranteed_days_to_delivery');
            $table->text('trigger')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offline_mall_discounts', function (Blueprint $table) {
            $table->dropColumn('customer_group_ids');
        });
    }
}
