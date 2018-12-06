<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
           
            $table->string('logo')->nullable();
           // $table->string('publisher_rd_image');
            $table->string('address')->nullable();
            $table->string('url');
            $table->string('page_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('description')->nullable();
            $table->enum('status',['active', 'de-active'])->default('active');
            $table->enum('delete_status',['Y','N'])->default('N');
            $table->enum('popularity_status',['Y','N'])->default('N');
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
        Schema::dropIfExists('publishers');
    }
}
