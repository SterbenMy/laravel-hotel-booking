<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ArticlesComments', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->dateTime('created_at', $precision = 0);
            $table->string('author', 255);
            $table->dateTime('updated_at', $precision = 0);
            $table->boolean('approved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ArticlesComments');
    }
}
