<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'articles', function ( Blueprint $table )
        {
            $table->increments( 'id' );
            $table->string( 'title' )->default('');
            $table->text( 'content' )->default('');
            $table->timestamp( 'publish_at' );
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
        Schema::drop( 'articles' );
    }
}