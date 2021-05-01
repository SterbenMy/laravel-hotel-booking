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
            $table->BigInteger('article_id')->unsigned()->nullable();
            $table->BigInteger('tag_id')->unsigned()->nullable();
            $table->foreign('article_id')->references('id')->on('Articles')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('ArticlesTags')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ArticlesTagsConnection');
    }
}
