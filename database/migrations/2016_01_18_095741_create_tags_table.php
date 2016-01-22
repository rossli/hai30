<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //创建tags这个表
        Schema::create( 'tags', function ( Blueprint $table )
        {
            $table->increments( 'id' );
            $table->string( 'name' );
            $table->timestamps();
        } );

        //创建一个中间表, 可以一次性创建很多的表,但是要注意 down也要添加上
        Schema::create( 'article_tag', function ( Blueprint $table )
        {
            $table->increments( 'id' );
            $table->integer( 'article_id' )->unsigned()->index();
            $table->integer( 'tag_id' )->unsigned()->index();
            $table->foreign( 'article_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' )->onUpdate( 'cascade' );
            $table->foreign( 'tag_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' )->onUpdate( 'cascade' );
            $table->timestamps();
        } );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //注意,上面up 方法 一次性创建两个表,这里也要一次性 rollback 两个表
        Schema::drop( 'tags' );
        Schema::drop( 'article_tab' );
    }
}
