<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonkursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konkurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('konkurs_title');
            $table->text('konkurs_video')->nullable();
            $table->string('konkurs_image');
            $table->text('konkurs_terms_of_participation');
            $table->text('konkurs_description');
          
            $table->enum('konkurs_status',['0','1']);
            $table->string('konkurs_start_date');
            $table->string('konkurs_end_date');
           
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
        Schema::dropIfExists('konkurs');
    }
}
