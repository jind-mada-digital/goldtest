<?php namespace Goldtest\Site\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddCustomerHeightWeight extends Migration
{
    public function up()
    {
        Schema::table('offline_mall_customers', function($table)
        {
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
        });
    }

    public function down()
    {
        // nothing for now
    }
}
