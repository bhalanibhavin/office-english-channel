<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkInVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->foreign('cover_id')->references('id')->on('medias')->onUpdate('CASCADE')->onDelete('NO ACTION');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('NO ACTION');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onUpdate('CASCADE')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->dropForeign('vendors_cover_id_foreign');
            $table->dropForeign('vendors_category_id_foreign');
            $table->dropForeign('vendors_sub_category_id_foreign');
        });
    }
}
