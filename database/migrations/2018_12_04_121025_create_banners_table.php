<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
           
            $table->string('banner_path')->nullable();
           // $table->string('publisher_rd_image');
            $table->string('banner_text')->nullable();

            $table->string('valid_date')->nullable();
            $table->enum('status',['active', 'de-active'])->default('active');
            $table->enum('delete_status',['Y','N'])->default('N');

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
        Schema::dropIfExists('banners');
    }
}
