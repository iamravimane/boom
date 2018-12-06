<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('url');
            $table->longText('content')->nullable();
            $table->longText('description')->nullable();
            $table->text('page_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->longText('meta_description')->nullable();
            $table->integer('publish_day')->nullable();
            $table->string('publish_month')->nullable();
            $table->integer('publish_year')->nullable();
            $table->enum('active_status',['active','de-active'])->default('active');
            $table->enum('delete_status',['Y','N'])->nullable()->default('N');
            $table->enum('popularity_status',['Y','N'])->nullable()->default('N');
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
        Schema::dropIfExists('news');
    }
}
