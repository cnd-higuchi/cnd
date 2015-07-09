<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_data', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			$table->timestamp('sales_date');
			$table->string('client_name');
			$table->integer('status');
			$table->string('project_name');
			$table->double('sales');
			$table->double('suppliers');
			$table->double('gross_profit');
			$table->double('gross_profit_margin');
			$table->string('token');
			$table->integer('fix');
			$table->integer('del_flg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sales_data');
    }
}
