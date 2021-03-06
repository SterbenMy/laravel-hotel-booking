<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->mediumText('short_description');
            $table->longText('content');
            $table->dateTime('create_at', $precision = 0);
            $table->dateTime('modified_at', $precision = 0);
            $table->dateTime('published_at', $precision = 0);
            $table->string('SEO_title', 70);
            $table->string('SEO_description', 150);
            $table->string('slug', 255)->unique();
            $table->BigInteger('author_id')->unsigned()->nullable();
            $table->BigInteger('image_id')->unique()->unsigned()->nullable();
            $table->BigInteger('comments_id')->unsigned()->nullable();
            $table->BigInteger('category_id')->unsigned()->nullable();
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('ArticlesImages')->onDelete('cascade');
            $table->foreign('comments_id')->references('id')->on('ArticlesComments')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('ArticlesCategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Articles');
    }
}
