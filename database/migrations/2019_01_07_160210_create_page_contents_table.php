<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->text('about_textarea')->nullable()->default(null);
            $table->string('gallery_text', 255)->nullable()->default(null);
            $table->string('contactus_text', 255)->nullable()->default(null);
            $table->string('student_text_1', 255)->nullable()->default(null);
            $table->string('student_text_2', 255)->nullable()->default(null);
            $table->string('blog_text_1', 255)->nullable()->default(null);
            $table->string('blog_text_2', 255)->nullable()->default(null);
            $table->string('blog_detail_text_1', 255)->nullable()->default(null);
            $table->string('blog_detail_text_2', 255)->nullable()->default(null);
            $table->string('ielts_date', 255)->nullable()->default(null);
            $table->string('ielts_time', 255)->nullable()->default(null);
            $table->string('ielts_address', 255)->nullable()->default(null);
            $table->string('ielts_contact_number', 255)->nullable()->default(null);
            $table->string('ielts_contact_email', 255)->nullable()->default(null);
            $table->string('ielts_book_seat', 255)->nullable()->default(null);
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
        Schema::dropIfExists('page_contents');
    }
}
