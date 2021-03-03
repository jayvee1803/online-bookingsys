<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CourselistTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courselist', function (Blueprint $table) {
            $table->id("course_id");
            $table->LongText("course_name");
            $table->LongText("courselist_name");
            $table->LongText("courselist_desc");
            $table->integer("data_aos");
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courselist');
    }
}
