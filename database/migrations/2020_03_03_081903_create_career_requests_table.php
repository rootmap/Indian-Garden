<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_circular_id');
            $table->string('job_title');
            $table->string('full_name');
            $table->string('email');
            $table->string('mobile_number');
            $table->string('expected_salary');
            $table->string('git_link');
            $table->string('linkedin_link');
            $table->string('applicant_photo');
            $table->string('applicant_cv');
            $table->string('present_address');
            $table->integer('store_id');
            $table->integer('created_by');
            $table->integer('updated_by');
            
            $table->softDeletes();
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
        Schema::dropIfExists('career_requests');
    }
}
