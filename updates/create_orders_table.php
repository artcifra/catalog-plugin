<?php namespace Kodji\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOrdersTable extends Migration
{

    public function up()
    {
        Schema::create('kodji_catalog_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kodji_catalog_orders');
    }

}
