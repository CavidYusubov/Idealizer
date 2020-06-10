<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('startup_logo');
            $table->string('startup_title');
            $table->string('startup_description');
            $table->string('startup_idea');
            $table->string('startup_team');
            $table->string('startup_color');
            $table->string('startup_pitch');
            $table->string('startup_image');
            $table->string('startup_documents');
            $table->string('startup_video');
            $table->string('startup_must');
            $table->string('startup_check');
            $table->string('favor');
             $table->enum('startup_status',['aktiv','passiv']);
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
        Schema::dropIfExists('startups');
    }
}
