<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ArticlesImages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->dateTime('created_at', $precision = 0);
            $table->dateTime('updated_up', $precision = 0);
            $table->integer('size');
            $table->string('path', 255);
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
        Schema::dropIfExists('ArticlesImages');
        Schema::enableForeignKeyConstraints();
    }
}
