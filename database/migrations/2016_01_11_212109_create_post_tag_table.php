<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag',function(Blueprint $table){
            $table->unsignedInteger('post_id');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('restrict');
            $table->unsignedInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('restrict');
            $table->timestamps();
            $table->primary(array('post_id','tag_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post_tag');
    }
}
