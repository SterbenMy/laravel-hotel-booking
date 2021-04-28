<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTagsConnection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ArticlesTagsConnection', function (Blueprint $table) {
            $table->BigInteger('article_id')->unsigned();
            $table->BigInteger('tag_id')->unsigned();
            $table->foreign('article_id')->references('id')->on('Articles');
            $table->foreign('tag_id')->references('id')->on('ArticlesTags');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_tags_connection');
    }
}
