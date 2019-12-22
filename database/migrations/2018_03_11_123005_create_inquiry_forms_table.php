<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiryFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiry_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 90)->nullable()->default(null);
            $table->string('last_name', 90)->nullable()->default(null);
            $table->string('email', 145)->nullable()->default(null);
            $table->string('subject', 145)->nullable()->default(null);
            $table->string('comments', 512)->nullable()->default(null);
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
        Schema::dropIfExists('inquiry_forms');
    }
}
