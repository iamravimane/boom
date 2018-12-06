<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('report_title');
            $table->string('report_url');
            $table->text('report_description');
            $table->float('price');
            $table->string('report_code');
            $table->char('publish_and_upcoming_status');/*publish or upcoming*/
            
            $table->interger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            
            $table->interger('sub_category_id')->unsigned();
            $table->foreign('sub_category_id')->references('id')->on('categories');
            
            
            $table->integer('publish_day')->nullable();
            $table->integer('publish_month')->nullable();
            $table->integer('publish_year')->nullable();
            
            $table->integer('upcoming_day')->nullable();
            $table->integer('upcoming_month')->nullable();
            $table->integer('upcoming_year')->nullable();
            
            
            $table->integer('single_user_type_price')->nullable();
            $table->integer('five_user_type_price')->nullable();
            $table->integer('enterprise_type_price')->nullable();
            $table->integer('data_pack_type_price')->nullable();
            
            
            
            $table->integer('status');
            $table->integer('publisher_id')->unsigned();
            $table->foreign('publisher_id')->references('id')->on('publishers');
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
        Schema::dropIfExists('reports');
    }
}
