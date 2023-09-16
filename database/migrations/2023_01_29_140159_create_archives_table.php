<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {
            $table->id();
            $table->string('year')->nullable();
            $table->string('client')->nullable();
            $table->string('project')->nullable();
            $table->string('industry')->nullable();
            $table->string('gif')->nullable();
            $table->string('video')->nullable();
            $table->string('title')->nullable();
            $table->string('creativeDir')->nullable();
            $table->string('production')->nullable();
            $table->string('music')->nullable();
            $table->string('design')->nullable();
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
        Schema::dropIfExists('archives');
    }
}
