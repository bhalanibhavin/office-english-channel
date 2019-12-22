<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admin_email', 90)->nullable()->default(null);
            $table->string('contact_address', 512)->nullable()->default(null);
            $table->string('facebook_url', 90)->nullable()->default(null);
            $table->string('twitter_url', 90)->nullable()->default(null);
            $table->string('linkedin_url', 90)->nullable()->default(null);
            $table->string('instagram_url', 90)->nullable()->default(null);
            $table->string('youtube_url', 90)->nullable()->default(null);
            $table->string('dribble_url', 90)->nullable()->default(null);
            $table->string('google_plus_url', 90)->nullable()->default(null);
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
        Schema::dropIfExists('settings');
    }
}
