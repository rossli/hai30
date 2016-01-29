<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //创建 数据表
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('This is book  title');
            $table->text('intro')->comment('This is book intro');
            $table->string('image')->comment('This is iamge url');
            $table->timestamp('published_at')->comment('This is the content that when to publish');
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
        Schema::drop('lessons');
    }
}
