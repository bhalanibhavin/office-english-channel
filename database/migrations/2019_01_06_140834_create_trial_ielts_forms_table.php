<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrialIeltsFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trial_ielts_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name', 255);
            $table->string('email', 90)->nullable()->default(null);
            $table->string('contact_number', 25)->nullable()->default(null);
            $table->smallInteger('module')->default('0')->comment('0=ACADEMIC, 1=GENERAL-TRAINING');
            $table->date('test_date', 25)->nullable()->default(null);            
            $table->smallInteger('exposure')->default('0')->comment('0=FRESHER, 1=REPEATER');            
            $table->string('exam_date', 25)->default('0')->comment('0=23rd-September-2018, 1=7th-October-2018');            
            $table->string('reason_choosing_ielts_ans', 255);
            $table->string('payment_detail_contact')->default('0')->comment('0=WHATSAPP,1=CALL, 2=SCHEDULE-A-MEETING, 3=EMAIL');
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
        Schema::dropIfExists('trial_ielts_forms');
    }
}
