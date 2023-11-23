<?php namespace Goldtest\Site\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSchoolsTable extends Migration
{
    public function up()
    {
        Schema::create('goldtest_site_schools', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');

            $table->string('address_name')->nullable();
            $table->text('lines');
            $table->string('zip', 20);
            $table->string('city');
            $table->integer('state_id')->unsigned()->nullable()->index();
            $table->integer('country_id')->unsigned()->nullable()->index();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('goldtest_site_schools');
    }
}
