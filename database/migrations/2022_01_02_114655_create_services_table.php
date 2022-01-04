<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name_ar')->nullable();
			$table->string('content_ar', 1000)->nullable();
			$table->string('name_en')->nullable();
			$table->string('content_en', 1000)->nullable();
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
		Schema::drop('services');
	}

}
