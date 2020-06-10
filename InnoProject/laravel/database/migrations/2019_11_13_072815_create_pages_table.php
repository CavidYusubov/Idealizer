<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('page_title');
            $table->string('page_slug')->nullable();
            $table->string('page_file')->nullable();
            $table->integer('page_must');
            $table->string('page_content')->nullable();
            $table->enum('page_status',['0','1']);
            

          
  
  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
