<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicensetypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licensetypes', function (Blueprint $table) {
            $table->increments('licence_id');
            $table->integer('report_id')->unsigned();
            $table->float('5_user');
            $table->float('multiple');
            $table->float('corporate');
            $table->float('data_pack');
            $table->float('elect_single');
            $table->float('hard_copy');
            $table->float('cd_price');
            $table->float('site_user');
            $table->float('enterprise');
            $table->float('enterprise_wide');
            $table->float('local_pdf');
            $table->float('team_license');
            $table->float('global_site');
            $table->float('country_wide');
            $table->float('global_pdf');
            $table->float('data_local_pdf');
            $table->float('data_global_pdf');
            $table->enum('status',['active','de-active'])->default('active');
            $table->timestamps();
            $table->foreign('report_id')->references('id')->on('reports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licensetypes');
    }
}
