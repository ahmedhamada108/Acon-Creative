<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('feedback', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 1000)->nullable();
			$table->string('img', 1000)->nullable();
			$table->string('job', 1000)->nullable();
			$table->string('feedback', 1000)->nullable();
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('feedback');
	}

}
