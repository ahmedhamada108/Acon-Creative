<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('hero_content1_ar', 1000)->nullable();
            $table->string('hero_content1_en', 1000)->nullable();
            $table->string('hero_content2_ar', 1000)->nullable();
            $table->string('hero_content2_en', 1000)->nullable();
            $table->string('ourservice1_ar', 1000)->nullable();
            $table->string('ourservice1_en', 1000)->nullable();
            $table->string('ourservice2_ar', 1000)->nullable();
            $table->string('ourservice2_en', 1000)->nullable();
            $table->string('ourservice3_ar', 1000)->nullable();
            $table->string('ourservice3_en', 1000)->nullable();
            $table->string('AboutSection_ar', 1000)->nullable();
            $table->string('AboutSection_en', 1000)->nullable();
            $table->string('About_ar', 1000)->nullable();
            $table->string('About_en', 1000)->nullable();
            $table->string('WhatsApp')->nullable();
            $table->string('Telegram')->nullable();
            $table->string('Phone_Number')->nullable();
            $table->string('Email')->nullable();
            $table->string('Facebook_URL', 1000)->nullable();
            $table->string('Twitter_URL', 1000)->nullable();
            $table->string('privacy_ar', 1000)->nullable();
            $table->string('privacy_en', 1000)->nullable();
            $table->string('terms_ar', 1000)->nullable();
            $table->string('terms_en', 1000)->nullable();
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
        Schema::dropIfExists('content');
    }
}
