<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ArticlesCategories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->dateTime('created_at', $precision = 0);
            $table->dateTime('updated_up', $precision = 0);
            $table->string('parent_category', 255);
            $table->string('slug', 255);
            $table->string('seo_title', 70);
            $table->string('seo_description', 150);
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
        Schema::dropIfExists('ArticlesCategories');
        Schema::enableForeignKeyConstraints();
    }
}
