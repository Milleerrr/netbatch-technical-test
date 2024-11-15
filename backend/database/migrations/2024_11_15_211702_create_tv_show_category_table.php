<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTVShowCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('tv_show_category', function (Blueprint $table) {
            $table->unsignedBigInteger('tv_show_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('tv_show_id')->references('id')->on('tv_shows')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->primary(['tv_show_id', 'category_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tv_show_category');
    }
}