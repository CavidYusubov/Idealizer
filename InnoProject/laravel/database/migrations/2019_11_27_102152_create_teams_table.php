<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teams_title');
            $table->text('teams_description');
            $table->string('teams_logo');
            $table->text('teams_members');
            $table->string('teams_startup_id');
            $table->string('teams_must');
            $table->string('teams_favor');
            $table->enum('teams_status',['1','0']); 
            $table->string('teams_check');
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
        Schema::dropIfExists('teams');
    }
}
