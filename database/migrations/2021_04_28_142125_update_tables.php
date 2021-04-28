<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidArticlesTags
     */
    public function up()
    {
        Schema::rename('Articles','articles');
        Schema::rename('ArticlesCategories','categories');
        Schema::rename('ArticlesComments','comments');
        Schema::rename('ArticlesImages','images');
        Schema::rename('ArticlesTags','tags');
        Schema::rename('ArticlesTagsConnection','tagsConnections');

        Schema::table('categories',function (Blueprint $table){
            $table->string('slug')->unique()->change();
            $table->BigInteger('parent_category')->unsigned()->change();
            $table->renameColumn('seo_title','SEO_title');
            $table->renameColumn('seo_description','SEO_description');
            $table->foreign('parent_category')->references('id')->on('categories')->onDelete('cascade');
        });

        Schema::table('tags',function (Blueprint $table){
            $table->dropColumn('parent_category');
            $table->string('slug')->unique()->change();
        });

        Schema::table('articles',function (Blueprint $table){
            $table->dropForeign('articles_comments_id_foreign');
            $table->dropColumn('comments_id');
        });
        Schema::table('comments',function (Blueprint $table){
            $table->BigInteger('article_id')->unsigned();
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('articles','Articles');
        Schema::rename('categories','ArticlesCategories');
        Schema::rename('comments','ArticlesComments');
        Schema::rename('images','ArticlesImages');
        Schema::rename('tags','ArticlesTags');
        Schema::rename('tagsConnections','ArticlesTagsConnection');

        Schema::table('Articles', function (Blueprint $table){
            $table->BigInteger('comments_id')->unsigned();
            $table->foreign('comments_id')->references('id')->on('ArticlesComments');
        });

        Schema::table('ArticlesComments', function (Blueprint $table){
            $table->dropForeign('comments_article_id_foreign');
            $table->dropColumn('article_id');
        });
    }
}
