<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ArticlesTags', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->dateTime('created_at', $precision = 0);
            $table->dateTime('updated_up', $precision = 0);
            $table->string('parent_category', 255);
            $table->string('slug', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('ArticlesTags');
        Schema::enableForeignKeyConstraints();
    }
}
