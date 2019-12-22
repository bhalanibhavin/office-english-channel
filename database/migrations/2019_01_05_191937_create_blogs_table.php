<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cover_id')->unsigned()->nullable()->index();
            $table->integer('blog_category_id')->unsigned()->nullable()->index();
            $table->string('title', 255);
            $table->string('slug', 255)->nullable()->default(null);
            $table->string('summary', 512)->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->string('meta_title', 255)->nullable()->default(null);
            $table->string('meta_tags', 255)->nullable()->default(null);
            $table->string('meta_description', 512)->nullable()->default(null);
            $table->string('written_by', 145)->nullable()->default(null);
            $table->date('publish_date')->nullable()->default(null);
            $table->date('remove_date')->nullable()->default(null);
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
        Schema::dropIfExists('blogs');
    }
}
