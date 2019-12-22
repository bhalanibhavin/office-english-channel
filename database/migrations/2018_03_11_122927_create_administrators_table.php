<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 90)->nullable()->default(null);
            $table->string('last_name', 90)->nullable()->default(null);
            $table->string('email', 145)->nullable()->default(null);
            $table->string('password', 145)->nullable()->default(null);
            $table->smallInteger('status')->nullable()->default('1')->comment('1-ACTIVE,0-INACTIVE');
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
        Schema::dropIfExists('administrators');
    }
}
