<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference');
            $table->dateTime('date_posted');
            $table->string('job_name');
            $table->string('job_title');
            $table->string('job_descrition');
            $table->dateTime('job_start_date');
            $table->bigInteger('no_of_positions');
            $table->string('company_posted');
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        //drops the table jobs
        Schema::dropIfExists('jobs');
    }
}
