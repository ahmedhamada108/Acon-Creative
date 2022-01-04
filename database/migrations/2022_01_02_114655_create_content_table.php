<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('content', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('hero_content1_ar', 500)->nullable();
			$table->string('hero_content1_en', 500)->nullable();
			$table->string('hero_content2_ar', 500)->nullable();
			$table->string('hero_content2_en', 500)->nullable();
			$table->string('ourservice1_ar', 500)->nullable();
			$table->string('ourservice1_en', 500)->nullable();
			$table->string('ourservice2_ar', 500)->nullable();
			$table->string('ourservice2_en', 500)->nullable();
			$table->string('ourservice3_ar', 500)->nullable();
			$table->string('ourservice3_en', 500)->nullable();
			$table->string('AboutSection_ar', 500)->nullable();
			$table->string('AboutSection_en', 500)->nullable();
			$table->string('About_ar', 500)->nullable();
			$table->string('About_en', 500)->nullable();
			$table->string('WhatsApp')->nullable();
			$table->string('Telegram')->nullable();
			$table->string('Phone_Number')->nullable();
			$table->string('Email')->nullable();
			$table->string('Facebook_URL', 500)->nullable();
			$table->string('Twitter_URL', 500)->nullable();
			$table->string('privacy_ar', 500)->nullable();
			$table->string('privacy_en', 500)->nullable();
			$table->string('terms_ar', 500)->nullable();
			$table->string('terms_en', 500)->nullable();
			$table->timestamps(6);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('content');
	}

}
