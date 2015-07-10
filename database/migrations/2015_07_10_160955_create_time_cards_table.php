<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_cards', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			$table->integer('type');
			$table->timestamp('bgn_time');
			$table->timestamp('end_time');
			$table->timestamp('bgn_stamp_time');
			$table->timestamp('end_stamp_time');
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
        Schema::drop('time_cards');
    }
}
