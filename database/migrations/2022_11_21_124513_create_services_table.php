<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->string('title3')->nullable();
            $table->string('title4')->nullable();
            $table->string('image')->nullable();
            $table->string('heading')->nullable();
            $table->string('subheading')->nullable();
            $table->longtext('description')->nullable();
            $table->longtext('otherimages')->nullable();
            $table->string('feature1')->nullable();
            $table->longtext('feature1detail')->nullable();
            $table->string('feature2')->nullable();
            $table->longtext('feature2detail')->nullable();
            $table->string('feature3')->nullable();
            $table->longtext('feature3detail')->nullable();
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
        Schema::dropIfExists('services');
    }
}
