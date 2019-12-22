<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cover_id')->unsigned()->nullable()->index();
            $table->string('category_name', 255);
            $table->string('slug', 255)->nullable()->default(null);
            $table->string('summary', 512)->nullable()->default(null);
            $table->smallInteger('status')->default('0')->comment('1-ACTIVE,0-INACTIVE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_categories');
    }
}
