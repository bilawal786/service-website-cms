<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('image1')->nullable();
            $table->string('heading1')->nullable();
            $table->longtext('description1')->nullable();
            $table->string('heading2')->nullable();
            $table->longtext('description2')->nullable();
            $table->string('categoryid')->nullable();
            $table->string('serviceid')->nullable();
            $table->string('client')->nullable();
            $table->string('date')->nullable();
            $table->string('location')->nullable();
            $table->string('image2')->nullable();
            $table->longtext('summarydescription')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
