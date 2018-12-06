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
            
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            
            $table->integer('subcategory_id')->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('categories');
            
            
            $table->integer('publisher_id')->unsigned();
            $table->foreign('publisher_id')->references('id')->on('publishers');
            
            $table->text('report_title');
            $table->text('page_title');
            $table->text('report_url');
            $table->longText('report_description');
            $table->longText('table_of_content');
            $table->longText('list_of_tables');
            $table->text('meta_title');
            $table->text('meta_tags');
            $table->integer('publish_day');
            $table->string('publish_month');
            $table->integer('publish_year');
            $table->integer('total_pages');
            $table->float('basic_price');
            $table->enum('discount_avaible',['Y','N'])->default('N');
            $table->enum('discount_type',['P','F']);
            $table->float('discount');
            $table->enum('publish_upcomming_status',['U','P']);
            $table->enum('status',['active','de-active'])->default('active');
            $table->enum('delete_status',['Y','N'])->default('N');
            $table->enum('popularity_status',['Y','N'])->default('N');
            $table->integer('query_count');
            $table->string('report_code');
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
