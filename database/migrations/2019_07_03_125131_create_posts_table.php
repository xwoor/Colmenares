<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {  
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('slug')->unique();

            $table->mediumText('excerpt')->nullable();
            $table->text('body');
            $table->enum('status',['PUBLISHED','DRAFT'])->default('DRAFT') ;

            $table->string('file');

            $table->timestamps();
            
 
        });
    }

    /**
     * Reverse the migrations.
     *clear
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }

}
